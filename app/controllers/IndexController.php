<?php

class IndexController extends Controller {

    public function getIndex() {
        return View::make('db.index');
    }
    
}
