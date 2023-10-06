<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teamController extends Controller
{
    public function teamList()
    {
        return response()->json(team::all());
    }
    public function index()
    {
        $teams = DB::table('teams')->get();
        return view('back.team.index', compact('teams'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $team = new team();
            $team->image = $request->image->store('uploads/team');
            $team->title = $request->title;
            $team->name = $request->name;
            $team->position = $request->position;
            $team->short_des = $request->short_des;
            $team->save();
            return redirect()->back()->with('message', 'Data added Successfully');
        } else {
            return view('back.team.add');
        }
    }
    public function edit(Request $request, team $team)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            if ($request->hasFile('image')) {
                $team->image = $request->image->store('uploads/team');
            }
            $team->title = $request->title;
            $team->name = $request->name;
            $team->position = $request->position;
            $team->short_des = $request->short_des;
            $team->save();
            return redirect()->back()->with('message', 'Data updated Successfully');
        } else {
            return view('back.team.edit', compact('team'));
        }
    }
    public function del($team)
    {
        DB::table('teams')->where('id', $team)->delete();
        return redirect()->back()->with('error', 'Data delete Successfully');
    }
}
