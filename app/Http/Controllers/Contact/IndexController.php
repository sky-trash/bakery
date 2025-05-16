<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contact = Contact::find(1);
        return view('contact.index', compact('contact'));
    }
}
