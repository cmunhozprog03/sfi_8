<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    public function AddPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'user_id' => 1,
            'title' => 'New post title',
            'body' => 'New body description'
        ]);
        return $post->json();
    }

    public function updatePost()
    {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Update Title',
             'body' => 'Update Body'
        ]);
        return $post->json();
    }

    public function deletePost($id)
    {
        $post = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }
}
