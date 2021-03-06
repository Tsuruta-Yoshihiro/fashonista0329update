<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class CoordinationController extends Controller
{
    public function add()
    {
        return view('user.coordination.create');
    }
    
    
    public function create(Request $request)
    {
        //Validation
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $post->image_path = basename($path);
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $post->fill($form);
        $post->user_id = $request->user()->id;
        $post->save();
        
        return redirect('user/profile/mypages');
    }
    
    public function index(Request $request)
    {
        $posts = Post::all();
        return view('user.profile.mypages', ['posts' => $posts]);
    }
    
    
    public function upload()
    {
        return view('user.coordination.upload');
    }
    
    
    public function edit()
    {
        return view('user.coordination.edit');
    }
    
    public function update()
    {
        return redirect('user.coordination.edit');
    }
    

}
