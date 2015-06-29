<?php

class PageController extends \Angel\Core\PageController {

    public function home()
    {
        return View::make('pages.home',$this->data);
    }

    public function about()
    {
        return View::make('pages.about',$this->data);
    }

}