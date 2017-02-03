<?php

  class Exame extends AppModel{
    //primeiro passo e sempre singular
    //public $belongsTo = 'Paciente';
    public $belongsTo = 'Procedimento';
  }
