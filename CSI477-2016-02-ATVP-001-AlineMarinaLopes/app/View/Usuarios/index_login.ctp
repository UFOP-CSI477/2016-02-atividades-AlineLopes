<h1>Acesso ao Sistema</h1>

<?php
    echo $this->Form->create('Usuario',array('controller' => 'usuarios', 'url' => 'login'));

    echo $this->Form->input('login');
    echo "<strong>Senha<strong>";
    echo $this->Form->password('senha');



    echo $this->Form->end("Acessar");
