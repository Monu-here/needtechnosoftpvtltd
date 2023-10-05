<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serviceController extends Controller
{
    public function serviceList()
    {
        return response()->json(service::all());
    }
    public function index()
    {
        $services = DB::table('services')->get();
        return view('back.service.index', compact('services'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $service =  new service();
            $service->title = $request->title;
            $service->short_desc = $request->short_desc;
            $service->image = $request->image->store('uploads/service');
            $service->name = $request->name;
            $service->sub_short_desc = $request->sub_short_desc;
            $service->save();
            return redirect()->back();
        } else {
            return view('back.service.add');
        }
    }
    public function edit(Request $request, service $service)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $service->title = $request->title;
            $service->short_desc = $request->short_desc;
            if ($request->hasFile('image')) {
                $service->image = $request->image->store('uploads/service');
            }
            $service->name = $request->name;
            $service->sub_short_desc = $request->sub_short_desc;
            $service->save();
            return redirect()->back();
        } else {
            return view('back.service.edit', compact('service'));
        }
    }
    public function del($service)
    {
        DB::table('services')->where('id', $service)->delete();
        return redirect()->back();
    }
}
