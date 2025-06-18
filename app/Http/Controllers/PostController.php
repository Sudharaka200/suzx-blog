<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        // $Post = Post::create($request->all());
        // return 'success';

        $rules = [
            'title1' => 'required|string|max:255'
        ];

        $message = [
            'title1.required' => 'Need a Title'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Post::create($request->only(['img_url1', 'title1', 'discription1']));
        return redirect()->back()->with('success', 'Post saved successfully!');
    }


    //Display Post 
    public function allPost(){
        $Posts = Post::all();
        return view('frontend.Home', compact('Posts'));
    }

    //display single post
    public function Apostsingle($id){
         $Post = Post::findOrFail($id);
        return view('frontend.SingleBlog', compact('Post'));
    }

    //Admin Dashboard
    //Display All Ads
    public function displayallAdsAdmin(){
        $Posts = Post::all();
        return view('frontend.admin.dashboard', compact('Posts'));
    }

    //show Update Form details
    public function updateForm($id){
        $Post = Post::findOrFail($id);
        return view('frontend.admin.updatepost', compact('Post'));
    }

    public function updateBlog(Request  $request, $id){
        $rules = [
            'title1' => 'required|string|max:255'
        ];

        $message = [
            'title1.required' => 'Need a Title'
        ];

        $validator = Validator::make($request->all(), $rules, messages: $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Post = Post::findOrFail($id);
        $Post->update($request->only(['img_url1', 'title1', 'discription']));

        return redirect()->route('post.display')->with('success', 'Post Updated Successfully');
    }

    //Delete Post
    public function deletePost($id){
        $Post = Post::findOrFail($id);
        $Post->delete();

        return redirect()->route('post.display')->with('success', 'Delete Successfully');
    }







}
