<?php

class UsuariosController extends AppController{
	public $helpers = array('Form','Session');
	public $components = array('Flash');

	public function index_login(){

	}

	public function admin(){

	}

	public function validar(){

		$usuario = $this->Usuario->findAllByLoginAndSenha
			($this->data['Usuario']['login'], $this->data['Usuario']['senha']);

		if(!empty($usuario))
			return $usuario;
		else
			return false;

	}

	public function login(){
		if(!empty($this->data['Usuario']['login'])){
			//validar
			$usuario = $this->validar();

			if($usuario != false){
				$this->Flash->set('Acesso realizado com sucesso.');
				$this->Session->write('Usuario', $usuario);

				$usuario = $this->Session->read('Usuario');
				$tipoUsuario = $usuario['0']['Usuario']['tipo'];

				if($tipoUsuario == '1'){
					$this->redirect(array('action'=>'admin'));
				}elseif($tipoUsuario == '2'){
				$this->redirect(array('controller'=>'procedimentos','action'=>'index_operador'));
			  }
				exit();
			}
			else{
				$this->Flash->set('Usuario e/ou senha inválidos!');
				$this->redirect(array('action'=>'index_login'));
				exit();
			}
		}
		else{
			$this->redirect(array('action'=>'index_login'));
			exit();
		}
	}

	public function logout(){
		$this->Session->destroy('Usuario');
		$this->redirect(array('controller'=>'pages','action' => 'home'), null, true);

	}

  public function add(){
    if (empty($this->request->data)){
      //data esta vazio -> carregar campos para inclusão


    }else {
      //persistir os dados
      if($this->Usuario->save($this->request->data)){
        $this->Flash->set('Usuario Inserido com Sucesso!');
        $this->redirect(array('action' => 'admin'));
      }
    }
  }
	public function afterFilter(){
		parent::afterFilter();
			if($this->action != 'home' && $this->action != 'index_login' ){
					$this->autenticar();
			}
	}
	public function autenticar(){
			if(!$this->Session->check('Usuario')){
					$this->redirect(array('controller'=>'usuarios', 'action'=>'index_login'));
					exit();
			}
			else{
					$usuario = $this->Session->read('Usuario');
					//Debugger::dump($usuario);
					$this->Flash->set('Seja bem-vindo(a) '.$usuario['0']['Usuario']['nome']);
			}
	}

}
