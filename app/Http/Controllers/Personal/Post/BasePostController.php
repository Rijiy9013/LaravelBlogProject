<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Service\PostService;

class BasePostController extends Controller
{
    public PostService $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
