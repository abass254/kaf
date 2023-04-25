<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    //

    //public function __construct(Request $req){
    //	parent::__construct($req);
    //	$this->t_model = new Test();
    //}

    public function TestMethod(){
        //$hell = Test::TestModel();
    	//echo $this->t_model->TestModel();
    	$model = (new Test())->TestModel();
    	return view('test', compact('model'));
    }

    public function Page(Request $req){

    	$slug = $req->path;

    	$pages = Test::all();

    	dd($pages);
    }
}