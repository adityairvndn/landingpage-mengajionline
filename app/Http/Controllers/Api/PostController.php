<?php

namespace App\Http\Controllers\Api;

//improt model
use App\Models\Post;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = Post::latest()->paginates(5);

        //return collection of posts as a resource
        return new PosrResource(true, 'List Data Posts', $posts);
    }
}
