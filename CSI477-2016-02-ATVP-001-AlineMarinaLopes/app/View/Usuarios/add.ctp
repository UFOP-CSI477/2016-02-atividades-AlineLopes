<h1>Realizar Cadastro</h1>

<?php
echo $this->Form->create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('login');
echo "<strong>Senha<strong>";
echo $this->Form->password('senha');
echo "<strong>Tipo<strong>";
echo $this->Form->tinyint('tipo');

echo $this->Form->end('Salvar');

echo $this->Html->link("Voltar",array('controller' => 'usuarios', 'action' => 'admin'));
