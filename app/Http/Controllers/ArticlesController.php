<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Comments;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("guest.index",["articles"=>Articles::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("guest.create",["articles"=>Articles::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Articles::create([
            "title"=>$request->input("title"),
        ]);
        return redirect("/admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Articles::where("id",$id)->firstOrFail();
        $comments=Comments::where("article_id",$id)->get();
        return view("guest.single",
            ["article"=>$article],
            ["comments"=>$comments]

        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article  = Articles::where("id",$id)->firstOrFail();
        return view("guest.edit",['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Articles::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
        ]);
        return redirect("/admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Articles::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }

    public function storeComment(Request $request)
    {
        Comments::Create([
            "article_id"=>$request->input("id"),
            "comment"=>$request->input("comment")
        ]);
        return redirect()->back();

    }
}
