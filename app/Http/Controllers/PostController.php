<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $keyword = isset($request->keyword) && $request->keyword != '' ? $request->keyword : null;

        $posts = Post::orderBy('id', 'desc');
        if (!is_null($keyword))
        {
            $posts = $posts->search($keyword, null, true);
        }

        $posts = $posts->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $niceName = [];
        $attr = [];
        foreach (config('locales.languages') as $key => $val) {
            $attr['title.' . $key] = 'required';
            $attr['body.' . $key] = 'required';

            $niceName['title.' . $key] = __('posts.title'). ' (' .$val['name']. ') ';
            $niceName['body.' . $key] = __('posts.body'). ' (' .$val['name']. ') ';

        }

        $validation = Validator::make($request->all(), $attr);
        $validation->setAttributeNames($niceName);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $data['title'] = $request->title;
        $data['body'] = $request->body;

        $post = Post::create($data);

        return redirect()->route('posts.show', $post)->with([
            'message' => __('posts.created_successfully'),
            'alert-type' => 'success',
        ]);

    }

    public function show($post)
    {
        $post = Post::where('slug->' . app()->getLocale(), $post)->first();
        return view('posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = Post::where('slug->' . app()->getLocale(), $post)->first();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $niceName = [];
        $attr = [];
        foreach (config('locales.languages') as $key => $val) {
            $attr['title.' . $key] = 'required';
            $attr['body.' . $key] = 'required';

            $niceName['title.' . $key] = __('posts.title'). ' (' .$val['name']. ') ';
            $niceName['body.' . $key] = __('posts.body'). ' (' .$val['name']. ') ';

        }

        $validation = Validator::make($request->all(), $attr);
        $validation->setAttributeNames($niceName);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $post = Post::where('slug->' . app()->getLocale(), $post)->first();

        $data['title'] = $request->title;
        $data['body'] = $request->body;

        $post->update($data);

        return redirect()->route('posts.show', $post)->with([
            'message' => __('posts.updated_successfully'),
            'alert-type' => 'success',
        ]);
    }

    public function destroy($post)
    {
        $post = Post::where('slug->' . app()->getLocale(), $post)->first()->delete();
        if ($post)
        {
            return redirect()->back()->with([
                'message' => __('posts.deleted_successfully'),
                'alert-type' => 'success',
            ]);
        }

        return redirect()->back()->with([
            'message' => __('posts.something_was_wrong'),
            'alert-type' => 'danger',
        ]);
    }
}
