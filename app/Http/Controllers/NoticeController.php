<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('backend.notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $notices = new Notice();
        $notices->notice_title = $request->title;
        $notices->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time(). $file->getClientOriginalName();
            $file->move('notice',$newName);
            $notices->image = 'notice/' . $newName;
        }
        $notices->save();
        $request->session()->flash('message','Record Save');
        return redirect()->back();
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
        $notices = Notice::find($id);
        return view('backend.notice.edit',compact('notices'));
       
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
        $date = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $notices = Notice::find($id);
        $notices->notice_title = $request->title;
        $notices->description = $request->description;
        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time(). $file->getClientOriginalName();
            $file->move('notice',$newName);
            $notices->image = 'notice/' . $newName;
        }
        $notices->update();
        $request->session()->flash('message','Record Update');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notices = Notice::find($id);
        $notices->delete();
        return redirect()->back();
    }
}
