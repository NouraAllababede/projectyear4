<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User ;
use App\Http\Trait\GeneralTrait ;

class UserController extends Controller
{
    use GeneralTrait ;

    public function UpdateUserName(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(), // استثناء الايميل الخاص بالمستخدم الحالي
    ]);

    $user = Auth::user();

    if (!$user) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    $data = [
        'name' => $user->name,
        'email' => $user->email,
    ];

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
