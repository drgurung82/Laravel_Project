<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        // return $contact;
        return view("contact.index", compact('contact'));
    }

    public function create()
    {
        return view("contact.create");
    }

    public function store(Request $request)
    {
        // return $request;
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        SudamSweetAlert::toast('success', 'Contact Created Successfully!');
        return redirect('/contact');
    }

    public function edit(int $id)
    {
        // return "delete" . $id;
        $contact = Contact::find($id);
        return view("contact.edit", compact('contact'));
    }

    public function delete(int $id)
    {
        // return "delete" . $id;
        Contact::find($id)->delete();
        SudamSweetAlert::toast('success', 'Contact Deleted Successfully!');
        return redirect("/contact");
    }

    public function update(Request $request, int $id)
    {
        // return $request;
        $request->validate([
            "name" => "required|min:2|max:40",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "subject" => "required|min:2|max:40",
            "message" => "required|min:3|max:1000",
        ]);
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        SudamSweetAlert::toast('success', 'Contact Updated Successfully!');
        return redirect('/contact');
    }
}
