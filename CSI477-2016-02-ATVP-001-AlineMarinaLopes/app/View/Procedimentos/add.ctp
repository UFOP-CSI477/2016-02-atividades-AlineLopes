<h1>Inserir Procedimento</h1>

<?php
// $usuario = $this->Session->read('Usuario');
// if ($usuario)
// {
// 	$results = $this->Usuario->findByLogin($usuario);
// 	$this->set('usuario', $results['Usuario']);

echo $this->Form->create('Procedimento');
echo $this->Form->input('nome');
echo $this->Form->input('preco');
echo $this->Form->input('usuario_id');
echo $this->Form->end('Salvar');

echo $this->Html->link("Voltar",array('controller' => 'usuarios', 'action' => 'admin'));
// 
// } else {
// 	//$this->redirect(array('action' => 'index'));
// }

?>
