<h1>Editar Exame</h1>

<?php
foreach($examesAsc as $e):

echo $this->Form->create('Exame');
echo $this->Form->input($e['Exame']['paciente_id']);
echo $this->Form->input('procedimento_id');
echo $this->Form->date('data');
echo $this->Form->end('Salvar');

endforeach;

?>
