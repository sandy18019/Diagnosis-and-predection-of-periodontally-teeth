<?php
abstract class Controller
{
    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }
    public function loadModel($name)
    {
        // MODELS_PATH = 'app/model/';
        $path = 'app/model/Model.php';

        if (file_exists($path)) {
            require 'app/model/Model.php';
            // The "Model" has a capital letter as this is the second part of the model class name,
            // all models have names like "LoginModel"
            $modelName = $name . 'Model';
            // return the new model object while passing the database connection to the model
            return new $modelName($this->db);
        }
    }
}
?>