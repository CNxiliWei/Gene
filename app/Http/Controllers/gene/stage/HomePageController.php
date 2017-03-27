<?php

namespace App\Http\Controllers\gene\stage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    //
	public function Index()
	{
		return view('gene.stage.homepage.index');
	}
}
