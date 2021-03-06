<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePhotoRequest;
use App\Article;
use App\Photo;

class AdminPhotosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin');
    }
    public function create($article_id)
    {
        //
        return view('admin.photos.create')->with('article_id', $article_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePhotoRequest $request, $article_id)
    {
        $article = Article::findOrFail($article_id);
        $photo = new Photo;
        $file = $request->path;
        //Asigining the image a new name
        $path_name = time() . $file->getClientOriginalName();
        //Moving image to images folder and saving in database
        $file->move('images', $path_name);
        $photo->path = $path_name;
        $article->photos()->save($photo);
        return redirect('/articles/'.$article_id.'/photos')->with('success', 'تم اضافة الصورة بنجاح. اضافة صورة اخرى؟');
        
    }
}
