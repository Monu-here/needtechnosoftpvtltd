<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contacSubmit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsubmitController extends Controller
{
    public function index()
    {
        $contactsubmits = DB::table('contac_submits')->get();
        return view('back.formSubmit.index', compact('contactsubmits'));
    }
    public function submit(Request $request)
    {
        $contactSubmit = new contacSubmit();
        $contactSubmit->name = $request->name;
        $contactSubmit->message = $request->message;
        $contactSubmit->subject = $request->subject;
        $contactSubmit->email = $request->email;
        $contactSubmit->save();
    }
}
