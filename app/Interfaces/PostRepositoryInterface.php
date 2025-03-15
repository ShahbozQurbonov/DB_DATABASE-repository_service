<?php

namespace App\Interfaces;

interface PostRepositoryInterface
{

    public function getAllPosts();

    public function deletePost($postId);

    public function createPost($postDetails);

    public function updatePost($postId,$newDetails);

    public function getFulfilledPosts($id);
}   