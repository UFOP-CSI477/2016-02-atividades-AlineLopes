<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('freelancer.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->script('bootstrap.min');




		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');


	?>
</head>
<body id="page-top" class="index">


	<!-- Navigation -->
     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
         <div class="container">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header page-scroll">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                 </button>
                 <a class="navbar-brand" href="#page-top">Analaboratoriais</a>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                     <li class="hidden">
                         <a href="#page-top"></a>
                     </li>
										 <li class="page-scroll">
											 <?php if ($this->Session->check('Usuario'))
											 				echo $this->Html->link("Sair",array('controller' => 'usuarios', 'action' => 'logout'));
													elseif($this->Session->check('Paciente'))
															echo $this->Html->link("Sair",array('controller' => 'pacientes', 'action' => 'logout')); ?>
                    </li>
                 </ul>
             </div>
             <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
     </nav>


	<div id="container">
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

			<p>
				<?php echo "Aline Marina Lopes 14.1.8392"; ?>
			</p>
		</div>
	</div>
</body>
</html>
