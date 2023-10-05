<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function list()
    {
        return response()->json(home::all());
    }
    public function index()
    {
        $homes = DB::table('homes')->get();
        return view('back.home.index', compact('homes'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $home = new home();
            $home->image = $request->image->store('uploads/home');
            $home->title = $request->title;
            $home->short_desc = $request->short_desc;
            $home->save();
            return redirect()->back();
        } else {
            return view('back.home.add');
        }
    }
    public function edit(Request $request, home $home)
    {
        if ($request->getMethod() == 'POST') {
            if ($request->hasFile('image')) {
                $home->image = $request->image->store('uploads/home');
            }
            $home->title = $request->title;
            $home->short_desc = $request->short_desc;
            $home->save();
            return redirect()->back();
        } else {
            return view('back.home.edit', compact('home'));
        }
    }
    public function del($home)
    {
        DB::table('homes')->where('id', $home)->delete();
        return redirect()->back();
    }
}
