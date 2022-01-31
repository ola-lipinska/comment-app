<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class HomepageController extends Controller
{
    public function show(): Response
    {
        return response(view('homepage'));
    }
}
