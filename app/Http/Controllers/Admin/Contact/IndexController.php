<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }
}
