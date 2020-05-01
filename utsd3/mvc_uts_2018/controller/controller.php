<?php
	//include class model
	include "model/model.php";
	
        if(class_exists('controller') != true){
            class controller{
                    //variabel public
                    public $model;

                    //inisialisasi awal untuk class
                    function __construct(){
                        $this->model = new model();
                    }
                    
                    function redirect($location){
                        header("location: $location");
                    }

                    function __destruct(){
                    }
            }
        }
?>