<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\monu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    // public function add(Request $request)
    // {
    //     $contact = new monu();
    //     $contact->name = $request->name;
    //     $contact->save();
    // }
    public function contactList()
    {
        return response()->json(contact::all());
    }
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        return view('back.contact.index', compact('contacts'));
    }
    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $contact =  new contact();
            $contact->address = $request->address;
            $contact->phone = $request->phone;
            $contact->mail = $request->mail;
            $contact->time = $request->time;
            $contact->save();
            return redirect()->back()->with('message', 'Data added Successfully');
        } else {
            return view('back.contact.add');
        }
    }
    public function edit(Request $request, contact $contact)
    {
        if ($request->getMethod() == 'POST') {
            // dd($request->all());
            $contact->address = $request->address;
            $contact->phone = $request->phone;
            $contact->mail = $request->mail;
            $contact->time = $request->time;
            $contact->save();
            return redirect()->back()->with('message', 'Data update Successfully');
        } else {
            return view('back.contact.edit', compact('contact'));
        }
    }
    public function del($contact)
    {
        DB::table('contacts')->where('id', $contact)->delete();
        return redirect()->back()->with('error', 'Data delete Successfully');
    }
}
