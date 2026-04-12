<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = [
            ['name' => 'John', 'email' => 'H6h1w@example.com', 'id' => 1],
            ['name' => 'Jane', 'email' => 'H6h1w@example.com', 'id' => 2],
            ['name' => 'John', 'email' => 'H6h1w@example.com', 'id' => 3],
            ['name' => 'Jane', 'email' => 'H6h1w@example.com', 'id' => 4],
        ];
        return view("user.index", [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "I'm here to create new record";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);
        //
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

    public function getPost()
    {
        // create record
        // Post::create([
        //     "user_id" => 1,
        //     "category_id" => 1,
        //     "title" => "My Post",
        //     "content" => "This is my post content",
        //     "mobile_number" => 1234567890,
        // ]);
        // show record
        $posts = Post::with(["category", "user"])->latest()->get();
        foreach ($posts as $post) {
            echo $post->title . " - " . $post->content . " - " . $post->mobile_number .  "<br>";
        }

        // update record
        Post::where("id", "2")->update([
            "title" => "My Post Updated",
            "content" => "This is my post content updated",
        ]);

        // delete record 1
        Post::where("id", 1)->delete();


        // return $posts;                                                                                                                                                                                                                                                                        ;
    }
}
