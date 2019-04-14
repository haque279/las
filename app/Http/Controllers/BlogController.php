<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('admin.welcome');
    }

    public function index()
    {
        $datas  = Blog::orderBy('created_at', 'desc')->get();
        return view('admin.admin_blogs', compact('datas'));
    }


    public function create()
    {
        return view('admin.blog_create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'title' => 'required|string|max:199|unique:blogs',
            'text' => 'required|string|min:10',
            'author' => 'nullable|string|max:100',
        ]);

//        for seo friendly url
        $string = $data['title'];
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        $data['link'] = $string;

        Blog::create($data);
        return back()->with('success', 'Blog successfully created');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $datas = Blog::where('id', $id)->first();
//        $datas['text'] =  html_entity_decode($datas->text);
        return view('admin.blog_update', compact('datas'));
    }


    public function update(Request $request, $id)
    {


        $this->validate($request, [
            'title' => 'required|string|max:199',
            'text' => 'required|string|min:10',
            'author' => 'nullable|string|max:100',
        ]);

        //        for seo friendly url
        $string = $request['title'];
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        $data['link'] = $string;

        $has_link = Blog::select('link')->where('link', $data['link'] )->where('id', '!=', $id )->count();
        if ($has_link > 0){
            return back()->with('fail', 'Title already exist!!!');
        }

        $data = Blog::find($id);



        $data['link'] = $string;
        $data['title'] = $request['title'];
        $data['text'] = $request['text'];
        $data['author'] = $request['author'];
        $data->save();
        return back()->with('success', 'Blog successfully Updated');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();
        return back()->with('success', 'Blog successfully Deleted');
    }
}
