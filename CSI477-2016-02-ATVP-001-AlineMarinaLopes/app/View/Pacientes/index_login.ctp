<h1>Acesso ao Sistema</h1>

<?php
    echo $this->Form->create('Paciente',array('controller' => 'pacientes', 'url' => 'login'));

    echo $this->Form->input('login');
    echo "<strong>Senha<strong>";
    echo $this->Form->password('senha');

    echo $this->Form->end("Acessar");

    echo $this->Html->link("Não é Cadastrado? Cadastre Aqui!",array('controller' => 'pacientes', 'action' => 'add')) ;
