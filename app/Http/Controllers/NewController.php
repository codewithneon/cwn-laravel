<?php namespace App\Http\Controllers;
use App\Traits\ControllerTrait;
class NewController extends Controller{

    use ControllerTrait;

    public function index()
    {
        return $this->trait_private();
    }
}
