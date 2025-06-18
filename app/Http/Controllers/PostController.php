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
}
