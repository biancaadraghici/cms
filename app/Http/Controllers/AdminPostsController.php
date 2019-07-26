<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Role;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin/posts/index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        $user=Auth::user();
        if(isset($user)){
            $input=$request->all();
            if($file=$request->file('photo_id')){
                $name=time() . $file->getClientOriginalName();
                $file->move('images',$name);
                $photo = Photo::create(['path'=>$name]);
                $input['photo_id'] = $photo->id;
            }
            $user->posts()->create($input);
            Session::flash('post_created','The post has been created');
            return redirect('admin/posts');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        

        return view('admin/posts/edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=Auth::user();
        if(isset($user)){
            $post=Post::findOrFail($id);
            $input=$request->all();
            if($file=$request->file('photo_id')){
                $name = time() . $file->getClientOriginalName();
                $file->move('images', $name);
                $photo=Photo::create(['path'=>$name]);
                $input['photo_id'] = $photo->id;
            }
            
            $post->update($input);
            Session::flash('post_updated','The post has been updated');
            return redirect('admin/posts');
        }
        // else{return view(ceva pagina cu eroare)}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        unlink(public_path()."/images/".$post->photo->path);
        $post->delete();
        return redirect('admin/posts');
    }
}
