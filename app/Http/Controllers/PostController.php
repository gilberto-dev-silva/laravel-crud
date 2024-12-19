<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {

        $new_post = [
            'author' => 'Author 2',
            'title' => 'Title',
            'content' =>'Content',
        ];

        Post::create($new_post);

        return 'Post criado com sucesso!';
    }

    public function read()
    {
        $post = Post::find(1);

        return response()->json($post);
    }

    public function readAll()
    {
        $posts = Post::all();

        return response()->json($posts);
    }

    public function update()
    {
        $post = Post::find(1);
        $post->title = 'Updated Title 1';
        $post->save();

        return response()->json($post);
    }

    public function updateAll()
    {
        $posts = Post::where('id', '>', 0)->update([
            'title' => 'Updated Title All',
            'content' => 'Updated Content All',
        ]);

        return response()->json($posts);
    }

    public function delete()
    {
        $post = Post::find(1);

        $post ? $post->delete() : null;

        return response()->json('Post deletado com sucesso!');
    }

    public function deleteAll()
    {
        $posts = Post::where('id', '>', 0)->delete();

        return $posts;
    }

}
