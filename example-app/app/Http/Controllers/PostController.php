<?php
namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('blog.index',['posts' => $posts]);
    }

    public function show() {
        return view('blog.index');
    }

    public function create() {
        $categories = Category::all();
        return view('blog.create',['categories' => $categories]);
    }

    public function edit($id) {
        $posts = Post::find($id);
        return view('blog.edit', ['posts' => $posts]);
    }

    public function store(StorePostRequest $request) {
        $posts = Post::create($request->all());
        $categories = $request->category_id;

        foreach ($categories as $category) {
            $posts -> categories()->attach($category);
        }
        return redirect('/posts');

    }

    public function update(UpdatePostRequest $request,$id) {
        Post::find($id)->update($request);
        return redirect('/posts');
    }

    public function destroy($id) {
        Post::find($id);
        return redirect('/posts');
    }
}
