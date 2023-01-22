<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use Intervention\Image\ImageManagerStatic as Image;
class PostsController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('posts/create');
    }
    public function store(){
        
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required' , 'image'],
        ]);

        
        $image_path = request('image')->store('uploads', 'public');

        // $image = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200);

        $image = Image::make(public_path("/storage/{$image_path}"))->fit(1200, 1200);
        $image->save();

        // dd("/storage/{$image_path}");

        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image'=> $image_path,
        ]);
        // Posts::create($data);
        
        return redirect('/profile/' . auth()->user()->id);
        
    }
    
    public function show(Post $post){
        
        return view('posts/show', compact('post'));
    }
}
