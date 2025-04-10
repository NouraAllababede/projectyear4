<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use App\Http\Trait\GeneralTrait ;

class UserController extends Controller
{
    use GeneralTrait ;

    public function UpdateUserName(request $request)
    {
         $user = User::where('uuid',$request->uuid)->first() ;
         $user->name = $request->name ; 
         $user->save ;
         $data = [
            'name'=> $user->name ,
            'email' => $user->email 
         ] ;
         return $this->apiResponse($data, true, null, 200);

    }
    


 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
