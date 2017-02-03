<h1>Editar Preço</h1>

<?php
echo $this->Form->create('Procedimento');
echo $this->Form->input('id');
echo $this->Form->input('preco');

echo $this->Form->end('Salvar');

echo $this->Html->link("Voltar",array('controller' => 'procedimentos', 'action' => 'index'));

?>
