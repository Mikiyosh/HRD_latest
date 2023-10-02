<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Action;
use Auth;
use App\Models\User;
use App\Models\Pre;
class UploadController extends Controller
{
    public function index(){

    	return view('index');
    }
}