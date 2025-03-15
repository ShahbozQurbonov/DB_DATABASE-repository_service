<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function getAllPosts()
    {
        return Post::all();
    }

    public function deletePost($postId)
    {
        return Post::destroy($postId);
    }

    public function createPost($postDetails)
    {
        return Post::create($postDetails);
    }

    public function updatePost($postId,$newDetails)
{
    $post = Post::findOrFail($postId);
    $post->update($newDetails);
    return $post;
}


    public function getFulfilledPosts($id)
    {
        return Post::find($id);
    }
}
