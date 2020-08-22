<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\Customer\PostService;

class PostController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function listPost(Request $request)
    {
        return $this->postService->listPost($request);
    }

    public function detailPost($slug)
    {
        return $this->postService->detailPost($slug);
    }

    // public function categoryPost($id)
    // {
    //     return $this->postService->categoryPost($id);
    // }
}
