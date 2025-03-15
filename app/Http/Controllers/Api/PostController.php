<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return $this->postRepository->getAllPosts();
    }

    public function store(Request $request)
    {
        return $this->postRepository->createPost($request->all());
    }

    public function show($id)
    {
        return $this->postRepository->getFulfilledPosts($id);
    }

    public function update(Request $request, $id)
    {
        return $this->postRepository->updatePost($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->postRepository->deletePost($id);
    }
}
