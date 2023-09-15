<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContatController extends Controller
{
    public function index(Request $request)
    {
        $result = Contact::query();

        if ($request->has('keywords') && $request->keywords != null) {
            $result->where('full_name', 'like', '%' . $request->keywords . '%');
        }

        if ($request->has('sort') && $request->sort != null) {
            $result->orderBy('created_at', $request->sort);
        } else {
            $result->orderBy('created_at', 'desc');
        }

        $contacts = $result->paginate(20);
        return view('admin.contact.index', compact('contacts'));
    }
}
