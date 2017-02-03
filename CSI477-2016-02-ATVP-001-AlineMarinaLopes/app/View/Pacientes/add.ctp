<h1>Realizar Cadastro</h1>

<?php
echo $this->Form->create('Paciente');
echo $this->Form->input('nome',array('class'=>'form-control'));
echo $this->Form->input('login',array('class'=>'form-control'));
echo "<strong>Senha<strong>";
echo $this->Form->password('senha',array('class'=>'form-control'));
echo $this->Form->end('Salvar',array('class'=>'Button'));

?>
