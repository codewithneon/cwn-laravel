<?php namespace App\Traits;

trait ControllerTrait{
    private function trait_private()
    {
        return "Data Form private Helper";
    }
    protected function trait_protected()
    {
        return "Data Form protected Helper";
    }
    public function trait_public()
    {
        return "Data Form public Helper";
        // return $this->trait_protected;
    }
}
