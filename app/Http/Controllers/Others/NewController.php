<?php namespace App\Http\Controllers\Others;
use App\Http\Helper\AppHelper;
use App\Http\Controllers\Controller;
class NewController extends Controller{
    public function index()
    {
        $hellper=new AppHelper();
       var_dump($hellper->my_public());
    }
}
