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

    public function citiesInEurope(): Response
    {
        return response(view('content.cities_in_europe'));
    }

    public function comparison(): Response
    {
        return response(view('content.comparison'));
    }

    public function Currency(): Response
    {
        return response(view('content.currency'));
    }

    public function wondersOfTheWorld(): Response
    {
        return response(view('content.wonders_of_the_world'));
    }
}
