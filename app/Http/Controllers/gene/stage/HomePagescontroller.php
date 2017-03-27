<?php

namespace App\Http\Controllers\gene\stage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePagescontroller extends Controller
{
    //
	public function Index()
	{
		return view('gene0.stage.homepage.index');
	}

}
