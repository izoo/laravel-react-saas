<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeatureResource;
use App\Models\Feature;
use Illuminate\Http\Request;

class Feature2Controller extends Controller
{
    //
    public $feature = null;
    public function __construct()
    {
        $this->feature =  Feature::where("route_name","feature1.index")
        ->where("active",true)
        ->firstOrFail();
    }

    public function index()
    {   
        return inertia('Feature2/Index',[
            'feature'=> new FeatureResource($this->feature),
            'answer'=>session('answer'),
        ]);
    }
}
