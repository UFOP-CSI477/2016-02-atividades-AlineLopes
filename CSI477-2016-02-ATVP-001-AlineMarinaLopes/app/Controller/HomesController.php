<?php

//trabalhar sempre com plural e controller

class HomesController extends AppController{

  public $helpers = array('Html','Form');
  public $components = array('Flash');

  public $uses = array('Paciente');


  public function index(){
  $this->set('pacientes', $this->Paciente->find('all'));

  }


}
