<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('backend.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'team_name' => 'required',
            'position' => 'required',
            'word' => 'required',
            'profile' => 'required'
        ]);
        $team = new Team();
        $team->team_name = $request->team_name;
        $team->position = $request->position;
        $team->words = $request->word;
        if($request->hasFile('profile')){
            $file = $request->profile;
            $newName = time() . $file->getClientOriginalName();
            $file->move('team',$newName);
            $team->image = 'team/' . $newName;
        }
        $team->save();
        $request->session()->flash('message','Record Saved');
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
        $team = Team::find($id);
        return view('backend.team.edit', compact('team'));
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
            'team_name' => 'required',
            'position' => 'required',
            'word' => 'required',
        ]);
        $team = Team::find($id);
        $team->team_name = $request->team_name;
        $team->position = $request->position;
        $team->words = $request->word;
        if($request->hasFile('profile')){
            $file = $request->profile;
            $newName = time() . $file->getClientOriginalName();
            $file->move('team',$newName);
            $team->image = 'team/' . $newName;
        }
        $team->update();
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
        $faq = Team::find($id);
        $faq->delete();
        return redirect()->back();
    }
}
