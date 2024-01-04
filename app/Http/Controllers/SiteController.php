<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function loginPage() {
        if(!auth()->guest()) return redirect('/gallery');

        return view('site.login');
    }

    public function submission(Request $request) {
        $fields = $request->validate([
            'lname' => 'required',
            'fname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'file' => 'required',
            'description' => 'required',
        ]);

        $file = $request->file('file');

        $entry = Entry::create([
            'lname' => $request->lname,
            'fname' => $request->fname,
            'address' => $request->address,
            'phone' => $request->phone,
            'description' => $request->description,
            'file' => $file->getClientOriginalName(),
            'access_code' => Str::random(8)
        ]);


        $file->move('uploads', $file->getClientOriginalName());

        return redirect('/success/' . $entry->id);
    }

    public function terms() {
        return view('site.terms');
    }
}
