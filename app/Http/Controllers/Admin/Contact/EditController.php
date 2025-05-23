<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Sales_statistics;
use App\Models\Type;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }
}
