<h1>Visualizar Procedimento</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Preço</th>
		<th>Tipo de Usuário</th>
		<th>Editar</th>
	  <th>Excluir</th>
	</tr>

	<?php foreach($procedimentos as $e): ?>
		<tr>
			<td><?= $e['Procedimento']['id']; ?></td>
			<td><?= $this->Html->link($e['Procedimento']['nome'],array('controller' => 'procedimentos', 'action' => 'view')); ?></td>
			<td><?= $e['Procedimento']['preco']; ?></td>
      <td><?= $e['Procedimento']['usuario_id']; ?></td>
			<td><?= $this->Html->link("Editar",array('controller' => 'procedimentos', 'action' => 'edit', $e['Procedimento']['id'])); ?></td>
			<td><?= $this->Html->link("Delete",array('controller' => 'procedimentos', 'action' => 'delete', $e['Procedimento']['id'])); ?></td>
			<td><?= $this->Html->link("Editar Preco",array('controller' => 'procedimentos', 'action' => 'edit_preco', $e['Procedimento']['id'])); ?></td>


		</tr>
	<?php endforeach; ?>

</table>
<?= $this->Html->link("Adicionar",array('controller' => 'procedimentos', 'action' => 'add')); ?>

<?= $this->Html->link("Voltar",array('controller' => 'usuarios', 'action' => 'admin')); ?>
