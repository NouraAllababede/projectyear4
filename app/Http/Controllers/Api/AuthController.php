<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Trait\GeneralTrait;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str ;
use App\Http\Resources\UserResource ;

class AuthController extends Controller
{

    use GeneralTrait;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|string|max:255|regex:/[a-z]/',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|required_without:registration_method|min:8',
            'gender' => 'required|string|in:male,fmale',
            'age' => 'required|integer|regex:/[0-9]/',

        ]);

        if ($validator->fails()) {
            if ($validator->errors()->has('email')) {
                return $this->apiResponse(null, false, 'Email already exists', 405);
            }
            return $validator->errors()->first();
        }

        try {

                // Create new user
                $user = User::create([
                    'uuid'=>Str::uuid(),
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password ? Hash::make($request->password) : null,
                    'gender' => $request->gender,
                    'age'=>$request->age,
                    'type'=>'player'
                ]);
                $token = $user->createToken('my-token')->plainTextToken ;
                $data = ['user'=>$user,'token'=>$token] ;


                return $this->apiResponse($data);
           
        } catch (\Exception $ex) {
            return $this->apiResponse(null, false, $ex->getMessage(), 500);
        }
    }



    public function login(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'nullable|required_without:registration_method',

    
        ]);

        // Check if validation fails and return errors if any
        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        try {
            // Attempt to find the user by phone number
            $user = User::where('email', $request->input('email'))->first();

            // Verify the phone
            if (!$user) {
                return $this->apiResponse(null, false, 'Invalid email Or Password .', 400);
            }

            if ($request->filled('password')) {
                if (!Hash::check($request->input('password'), $user->password)) {
                    return $this->apiResponse(null, false, 'Invalid email or password.', 400);
                }
            }


            // Generate a token for the user
            $data['user'] = new UserResource($user);
            $data['token'] = $user->createToken('MyApp')->plainTextToken;


            return $this->apiResponse($data, true, null, 200);
        } catch (\Exception $ex) {
            return $this->apiResponse(null, false, $ex->getMessage(), 500);
        }
    }



    public function logout(Request $request)
    {
        try {
            $user = auth('sanctum')->user();

            if ($user) {
                $token = $user->currentAccessToken();

                $token->delete();


                return $this->apiResponse('Logged out successfully', true, null, 200);
            } else {
                return $this->unAuthorizeResponse();
            }
        } catch (\Exception $ex) {
            return $this->apiResponse(null, false, $ex->getMessage(), 500);
        }

}

}
