<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testmonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testmonialController extends Controller
{
    public function testmonialList()
    {
        return response()->json(Testmonial::all());
    }
    public function index()
    {
        $testmonials = DB::table('testmonials')->get();
        return view('back.testonominal.index', compact('testmonials'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $testmonial = new Testmonial();
            $testmonial->name = $request->name;
            $testmonial->image = $request->image->store('uploads/testo');
            $testmonial->short_desc = $request->short_desc;
            $testmonial->position = $request->position;
            $testmonial->save();
            return redirect()->back()->with('message', 'Data added Successfully');
        } else {
            return view('back.testonominal.add');
        }
    }
    public function edit(Request $request, Testmonial $testmonial)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $testmonial->name = $request->name;
            if ($request->hasFile('image')) {
                $testmonial->image = $request->image->store('uploads/testo');
            }
            $testmonial->short_desc = $request->short_desc;
            $testmonial->position = $request->position;
            $testmonial->save();
            return redirect()->back()->with('message', 'Data added Successfully');
        } else {
            return view('back.testonominal.edit', compact('testmonial'));
        }
    }
    public function del($testmonial)
    {
        DB::table('testmonials')->where('id', $testmonial)->delete();
        return redirect()->back()->with('message', 'Data delete Successfully');
    }
}
