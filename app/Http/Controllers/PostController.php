<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * get list post
     * @return blade index in folde post
     */
    public function index()
    {
        $Post = Post::with('getAllPost')->get();
        return view('post.index',compact('Post'));
    }

    /**
     * get form create post
     */
    public function create()
    {
        $category = Category::all();
        return view('post.create', compact('category'));
    }

    /**
     * add post
     * @param request validation of post
     */
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        if ($post) {
            return redirect()->route('post.index')->with('success', 'insert successfully');
        }
    }

    /**
     * get form edit post
     * @param id of Post edit
     */
    public function update(){
       
    }

    /**
     * update Post
     * @param request validate of edit Post
     * @param id of Post edit
     */
    public function edit(){
      
    }

    public function delete(){
        
    }
}