<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\navFooter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class navFooterController extends Controller
{
    public function index()
    {
        $navFooters = DB::table('nav_footers')->get();
        return view('back.navFooter.index', compact('navFooters'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $navFooter = new navFooter();
            $navFooter->text1 = $request->text1;
            $navFooter->text2 = $request->text2;
            $navFooter->text3 = $request->text3;
            $navFooter->text4 = $request->text4;
            $navFooter->text5 = $request->text5;
            $navFooter->text6 = $request->text6;
            $navFooter->copy = $request->copy;
            $navFooter->social1 = $request->social1;
            $navFooter->social2 = $request->social2;
            $navFooter->social3 = $request->social3;
            $navFooter->social4 = $request->social4;
            $navFooter->save();
            return redirect()->back();
        } else {
            return view('back.navFooter.add');
        }
    }
    public function edit(Request $request, navFooter $navFooter)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());

            $navFooter->text1 = $request->text1;
            $navFooter->text2 = $request->text2;
            $navFooter->text3 = $request->text3;
            $navFooter->text4 = $request->text4;
            $navFooter->text5 = $request->text5;
            $navFooter->text6 = $request->text6;
            $navFooter->copy = $request->copy;
            $navFooter->social1 = $request->social1;
            $navFooter->social2 = $request->social2;
            $navFooter->social3 = $request->social3;
            $navFooter->social4 = $request->social4;
            $navFooter->save();
            return redirect()->back();
        } else {
            return view('back.navFooter.edit', compact('navFooter'));
        }
    }
    public function del($navFooter)
    {
        DB::table('nav_footers')->where('id', $navFooter)->delete();
        return redirect()->back();
    }
}
