<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ContentController extends Controller
{
    public function citiesInPoland(): Response
    {
        return response(view('content.cities_in_poland'));
    }
}
