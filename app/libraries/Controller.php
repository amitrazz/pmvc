<?php
/* Base controller
*/
class Controller{
  public function model($model){
    //require once
    require_once '../app/models/'.$model.'.php';
  }
  public function view($view,$data = []){
    if(file_exists('../app/views/'.$view.'.php')){
      require_once '../app/views/'.$view.'.php';
    }else{
      die("views dosent exit!");
    }
    

  }
}