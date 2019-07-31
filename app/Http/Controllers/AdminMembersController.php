<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberCreateRequest;
use App\Http\Requests\MemberEditRequest;
use App\Member;
use App\Event;
use App\User;
use App\SocialMedia;
use App\Photo;
use Illuminate\Support\Facades\Session;


class AdminMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=Member::all();
        return view('admin/members/index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/members/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberCreateRequest $request)
    {
        $input=$request->all();
        if($file=$request->file('photo_id')){
            $name=time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Member::create($input);
        Session::flash('member_created','The member has been added to the team!');
        return redirect('admin/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin/members/edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberEditRequest $request, $id)
    {
        $member = Member::findOrFail($id);
        $input = $request->all();
        if($file=$request->file('photo_id')){
            $name=time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['path'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $member -> update($input);
        Session::flash('member_edited', 'The member has been edited!');
        return redirect('admin/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member=Member::findOrFail($id);
        unlink(public_path()."/images/".$member->photo->path);
        $member->delete();

        Session::flash('member_deleted','The member has been deleted!');
        return redirect('admin/members');
    }
}
