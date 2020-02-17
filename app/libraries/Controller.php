<?php
    // Base controller, this loads thie models and views
    class Controller{
        //Load model
        public function model($model){
            //require model file
            require_once '../app/models/' . $model . '.php'; 

            // Instantiate the model
            return new $model();

        }

        //Load view
        public function view($view, $data = []){
            // Check if view exists
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else {
                // the view doesn't exist
                die('View does not exist');

            }
        }
    }