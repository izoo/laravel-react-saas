<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureResource;
use App\Models\Feature;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //

    public function index()
    {
        $features = Feature::where('active',true)->get();
        return Inertia::render('Welcome',[
            'features'=>FeatureResource::collection($features),
        ]);
    }
}
