<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::All();
            return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des donées
          $validated = $request->validate([
            'title' => 'string|max:255',
            'content' => 'string',
            'published' => 'boolean'
        ]);

        // Préparation du user
        $validated['user_id'] = 1;

        // Enregistrement des données
        $post = Post::create($validated);
        return (new PostRessource($post))
         ->response()
        ->setStatusCode(200);



    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
