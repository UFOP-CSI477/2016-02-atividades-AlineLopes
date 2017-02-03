<header>
	<?php

	if($this->Session->check('Paciente'))
	{
		?>
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
								<img  src="img/logo.png" class="img-responsive" alt="">
								<div class="intro-text">
									<div class="col-md-3"> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedimento",array('controller' => 'procedimentos', 'action' => 'index_geral')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",array('controller' => 'exames', 'action' => 'index')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",array('controller' => 'usuarios', 'action' => 'index_login')); ?> </div>
									<div class="col-md-3"> </div>
								</div>
						</div>
				</div>
		</div>
	<?php
}elseif(!$this->Session->check('Paciente') && !$this->Session->check('Usuario')){
		?>
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
								<img  src="img/logo.png" class="img-responsive" alt="">
								<div class="intro-text">
									<div class="col-md-3"> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedimento",array('controller' => 'procedimentos', 'action' => 'index_geral')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",	array('controller' => 'pacientes', 'action' => 'index_login')); ?> </div>
									<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",array('controller' => 'usuarios', 'action' => 'index_login')); ?> </div>
									<div class="col-md-3"> </div>
								</div>
						</div>
				</div>
		</div>
	<?php
	$usuario = $this->Session->read('Usuario');
	$tipoUsuario = $usuario['0']['Usuario']['tipo'];

}elseif($this->Session->check('Usuario') && $tipoUsuario == 1){
	?>
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<img  src="img/logo.png" class="img-responsive" alt="">
							<div class="intro-text">
								<div class="col-md-3"> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedimento",array('controller' => 'procedimentos', 'action' => 'index_geral')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",	array('controller' => 'pacientes', 'action' => 'index_login')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",array('controller' => 'usuarios', 'action' => 'admin')); ?> </div>
								<div class="col-md-3"> </div>
							</div>
					</div>
			</div>
	</div>
	<?php
}elseif($this->Session->check('Usuario') && $tipoUsuario == 2){
	echo "entrou operador";
	?>
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
							<img  src="img/logo.png" class="img-responsive" alt="">
							<div class="intro-text">
								<div class="col-md-3"> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Visualizar Procedimento",array('controller' => 'procedimentos', 'action' => 'index_geral')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Paciente",	array('controller' => 'pacientes', 'action' => 'index_login')); ?> </div>
								<div class="col-md-2 divbranca"><?= $this->Html->link("Área Administrador",	array('controller' => 'procedimentos', 'action' => 'index_operador'));
?> </div>
								<div class="col-md-3"> </div>
							</div>
					</div>
			</div>
	</div>
	<?php
}
	?>

</header>
