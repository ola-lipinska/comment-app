<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index(): Response
    {
        return response(view('contact.form'));
    }

    public function store(StoreContactRequest $request): Response
    {
        $input = $request->all();

        Contact::create([
           'name' => $input['name'],
           'email' => $input['email'],
           'message' => $input['message'],
        ]);

        return response(view('contact.form'));
    }
}
