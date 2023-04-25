<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Test extends Model
{
    //

    public function TestModel(){
    	///echo 'This is a test method';
    	
    	return $test = 'This is a simple test';
    }
}
