<?php

class PlanetsController extends BaseController{
    
    public function getAdd() {
        return View::make('planets.add');
    }

    public function postAdd() {
        $data = Input::all();

        $validation = Validator::make($data, Planet::getValidationRules());
        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)->withInput();
        }

        $planet = Planet::create($data);
        return 'Добавлена планета, id: ' . $planet->id;
    }
    public function getView($planetId) {
        $planet = Planet::find($planetId);

        
        if (!$planet) {
            App::abort(404);
        }

        // Увеличим счетчик просмотров планеты
        $planet->views++;
        $planet->save();

        return View::make('planets/view', array('planet' => $planet));
    }
    }
