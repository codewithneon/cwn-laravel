<?php namespace App\Http\Helper;
use App\Http\Controllers\Controller;

class AppHelper extends Controller{
    const HEELO='fdsa';
    private function my_private()
    {
        return "Data Form private Helper";
    }

    protected function my_protected()
    {
        return "Data Form protected Helper";
    }

    public function my_public()
    {
        return "Data Form public Helper";
        // return $this->my_protected;
    }
}
