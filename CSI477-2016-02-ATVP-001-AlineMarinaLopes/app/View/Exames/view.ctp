<h1>Listar Exames</h1>

<table>
	<tr>
		<th>Paciente</th>
		<th>Procedimento</th>
    <th>Data</th>
	</tr>

	<?php foreach($exames as $e):?>
		<tr>
			<td><?= $e['Exame']['paciente_id']; ?></td>
			<td><?= $e['Procedimento']['nome'] ?></td>
      <td><?= $e['Exame']['data']; ?></td>



		</tr>
	<?php endforeach;?>
</table>
<?=$this->Html->link("Voltar",array('controller' => 'usuarios', 'action' => 'admin'));?>
