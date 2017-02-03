<?php

//trabalhar sempre com plural e controller

class AreaadminsController extends AppController{

  public $helpers = array('Html'); //auxila na parte de view

  public function index(){

    //vai setar uma variavel que vai ser utilizasada na view
    $this->set('procedimentos', $this->Procedimento->find('all', array('order'=>array('nome'=>'asc'))));//atribuir a variavel um resultado

  }
