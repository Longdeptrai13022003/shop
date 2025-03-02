<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;



class DashboardController extends Controller
{
    
    public function __construct(

    ){

    }
    public function changeStatus(Request $request){
        $post=$request->input();

    }
}
