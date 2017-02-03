<h1>Listar Pacientes</h1>

<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
	</tr>

	<?php foreach($pacientes as $p): ?>
		<tr>
			<td><?= $p['Paciente']['id']; ?></td>
			<td><?= $p['Paciente']['nome']; ?></td>

		</tr>
	<?php endforeach; ?>
</table>
<?=$this->Html->link("Voltar",array('controller' => 'usuarios', 'action' => 'admin'));?>
