<h1>Visualizar Procedimento</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Preço</th>
		<th>Tipo de Usuário</th>

	</tr>

	<?php foreach($procedimentos as $e): ?>
		<tr>
			<td><?= $e['Procedimento']['id']; ?></td>
			<td><?= $this->Html->link($e['Procedimento']['nome'],array('controller' => 'procedimentos', 'action' => 'view')); ?></td>
			<td><?= $e['Procedimento']['preco']; ?></td>
      <td><?= $e['Procedimento']['usuario_id']; ?></td>

		</tr>
	<?php endforeach; ?>

</table>

<?= $this->Html->link("Voltar",array('controller' => 'pages', 'action' => 'home')); ?>
