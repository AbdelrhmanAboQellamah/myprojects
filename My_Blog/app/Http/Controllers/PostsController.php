<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {

        //كدا انت بتقوله يعمل اكسس ب ويز عن طريق فاريبل اسمه بوست و يروح ع المودل بوست اللي هي فيها البينات بتاعتنا ويجيب منها كل حاجه لان البراميتر جيت زي البراميتر اوول
        // والفاريبل اللي اسممه بوست هو اللي بنستخدمه بردو في صفحه الإندكس الاساسيه علشان نسدعي البينات زي العنوان مثلا
        return view('blog.index')
        ->with('posts',Post::get())
        ;
    }        



    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048',
        ]);

        $slug =str::slug($request->title,'-');
        $newImageName = uniqid().'-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);


        // انت بتقوله ان المودل اللي اسمها بوست في ميثود جواه اسمها كرييت اللي هي فيها الفاريبول اللي انت عملته اسمه فييلإيبل

        Post::create([
            'title'=>$request->input('title'),
            'description'=> $request->input('description'),
            'slug'=>$slug,
            'image_path' => $newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog');
    }


    public function show($slug)
    {
        return view('blog.show')
        ->with('post',Post::where('slug',$slug)->first());
        //كدا انت بتقوله يعمل اكسس ب ويز عن طريق فاريبل اسمه بوست و يروح ع المودل بوست اللي هي فيها البينات بتاعتنا ويجيب منها الاسلج اللي في قاعده البينات و فيرست علشان لو في حاجه متكرره ولا حاجه
        // والفاريبل اللي اسممه بوست هو اللي بنستخدمه بردو في صفحه الشو الاساسيه علشان نسدعي البينات زي العنوان مثلا
    }

    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post',Post::where('slug',$slug)->first());
    }


    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048',
        ]);

        $newImageName = uniqid().'-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);


        Post::where('slug',$slug)
        ->update([
            'title'=>$request->input('title'),
            'description'=> $request->input('description'),
            'slug'=>$slug,
            'image_path' => $newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog/'.$slug)
        ->with('message','The post has been edited');
    }


    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();
       
        return redirect('/blog')
        ->with('message','The post has been Deleted');
    }
}
