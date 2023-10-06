<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class featureController extends Controller
{
    public function featureList()
    {
        return response()->json(feature::all());
    }
    public function index()
    {
        $features = DB::table('features')->get();
        return view('back.feature.index', compact('features'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $feature = new feature();
            $feature->title = $request->title;
            $feature->short_desc = $request->short_desc;
            $feature->image = $request->image->store('uploads/feature');
            $feature->sub_title = $request->sub_title;
            $feature->sub_short_desc = $request->sub_short_desc;
            $feature->save();
            return redirect()->back()->with('message', 'Data added Successfully');
        } else {
            return view('back.feature.add');
        }
    }
    public function edit(Request $request, feature $feature)
    {
        if ($request->getMethod() == 'POST') {
            $feature->title = $request->title;
            $feature->short_desc = $request->short_desc;
            if ($request->hasFile('image')) {
                $feature->image = $request->image->store('uploads/feature');
            }
            $feature->sub_title = $request->sub_title;
            $feature->sub_short_desc = $request->sub_short_desc;
            $feature->save();
            return redirect()->back()->with('message', 'Data update Successfully');
        } else {
            return view('back.feature.edit', compact('feature'));
        }
    }
    public function del($feature)
    {
        DB::table('features')->where('id', $feature)->delete();
        return redirect()->back()->with('erroe', 'Data delete Successfully');
    }
}
