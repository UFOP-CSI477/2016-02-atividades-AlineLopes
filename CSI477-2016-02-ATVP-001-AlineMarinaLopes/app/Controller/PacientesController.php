<?php
//trabalhar sempre com plural e controller
class PacientesController extends AppController{
    public $helpers = array('Html','Form'); //auxila na parte de view
    public $components = array('Flash');
    public function index(){
        //vai setar uma variavel que vai ser utilizasada na view
        $this->set('pacientes', $this->Paciente->find('all', array('order'=>array('Paciente.nome'=>'asc'))));//atribuir a variavel um resultado
        //$this->set('procedimentos', $this->Procedimento->find('all'));//atribuir a variavel um resultado
    }
    public function index_login(){
    }
    public function validar(){
        $paciente = $this->Paciente->findAllByLoginAndSenha
            ($this->data['Paciente']['login'], $this->data['Paciente']['senha']);
        if(!empty($paciente))
            return $paciente;
        else
            return false;
    }
    public function login(){
        if(!empty($this->data['Paciente']['login'])){
            //validar
            $paciente= $this->validar();
            if($paciente != false){
                $this->Flash->set('Acesso realizado com sucesso.');
                $this->Session->write('Paciente', $paciente);
                $this->redirect(array('controller' => 'exames' ,'action'=>'index',$paciente['Paciente']['id'] ));
                exit();
            }
            else{
                $this->Flash->set('Usuario e/ou senha inválidos!');
                $this->redirect(array('action'=>'index_login'));
                exit();
            }
        }		else{
            $this->redirect(array('action'=>'index_login'));
            exit();
        }
    }
    public function logout(){
        $this->Session->destroy('paciente');
        $this->redirect(array('controller'=>'pages','action' => 'home'), null, true);
    }

    public function add(){
        if (empty($this->request->data)){
        }else {
            //persistir os dados
            if($this->Paciente->save($this->request->data)){
                $this->Flash->set('Paciente Cadastrado com Sucesso!');
                $this->redirect(array('action' => 'index_login'));
            }
        }
    }




    // public function afterFilter(){
    //   parent::afterFilter();
    //     if($this->action != 'home' && $this->action != 'index_login' ){
    //         $this->autenticar();
    //     }
    // }
    // public function autenticar(){
    //     if(!$this->Session->check('Paciente')){
    //         $this->redirect(array('controller'=>'pacientes', 'action'=>'index_login'));
    //         exit();
    //     }
    //     else{
    //         $paciente = $this->Session->read('Usuario');
    //         //Debugger::dump($usuario);
    //         $this->Flash->set('Seja bem-vindo(a) '.$paciente['0']['Paciente']['nome']);
    //     }
    // }
}
