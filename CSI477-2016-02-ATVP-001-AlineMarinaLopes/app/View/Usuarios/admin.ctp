<?php
if($this->Session->check('Usuario'))
{
?>

<header>
	<div class="container">
			 <div class="row">
					 <div class="col-lg-12">
	  				</div>

						<div class="col-md-1"> </div>
						<div class="col-md-2 divbranca"> <?= $this->Html->link("Cadastrar Administrador",array('controller' => 'usuarios', 'action' => 'add'));?></div>
						<div class="col-md-2 divbranca"> <?=  $this->Html->link("Cadastrar Procedimento",array('controller' => 'procedimentos', 'action' => 'index'));?></div>
						<div class="col-md-2 divbranca"> <?=  $this->Html->link("Listar Exames",array('controller' => 'exames', 'action' => 'view'));?></div>
	          <div class="col-md-2 divbranca"> <?=  $this->Html->link("Listar Pacientes",array('controller' => 'pacientes', 'action' => 'index'));?></div>
	          <div class="col-md-2 divbranca"> <?=  $this->Html->link("Relatório",array('controller' => 'exames', 'action' => 'relatorioadmin'));?> </div>
	          <div class="col-md-1"> </div>
				</div>
		</div>
	</header>
<?php }	?>
