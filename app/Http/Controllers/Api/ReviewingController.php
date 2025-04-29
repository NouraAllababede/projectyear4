<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reviewing;
use App\Http\Trait\GeneralTrait;


class ReviewingController extends Controller
{
    use GeneralTrait;
    
public function addOrUpdateComment(Request $request)
{
    $request->validate([
        'comment' => 'required|string|max:255|regex:/[a-z]/',
    ]);

    $userId = Auth::id();
    $comment = $request->input('comment');

    // Check for the existing comment by the user
    $reviewing = Reviewing::where('user_id', $userId)->first();

    if ($reviewing) {
        // Update the existing comment
        $reviewing->comment = $comment;
        $reviewing->save();
    } else {
        // Create a new comment
        Reviewing::create([
            'user_id' => $userId,
            'comment' => $comment,
        ]);
    }
        $data = ['comment'=>$comment] ;
    return $this->apiResponse($data);
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
