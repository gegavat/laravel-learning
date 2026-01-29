<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $posts = [
//            ['id' => 1, 'title' => 'Первый пост', 'content' => 'Текст первого поста'],
//            ['id' => 2, 'title' => 'Второй пост', 'content' => 'Текст второго поста'],
//        ];
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // 1 способ записи в БД
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        // 2 способ записи в БД
//        Post::create($request->only(['title', 'content']));

        return redirect('/posts/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = [
            'id' => $id,
            'title' => "Пост №$id",
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, perferendis?'
        ];

        return view('posts.show', compact('post'));
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
}
