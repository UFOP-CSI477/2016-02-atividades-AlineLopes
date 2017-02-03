<?php
//trabalhar sempre com plural e controller
class ExamesController extends AppController{
    public $helpers = array('Html','Form'); //auxila na parte de view
    public $components = array('Flash');

    public function index(){

    }

    public function view(){
      $this->set('exames', $this->Exame->find('all', array('order'=>array('Exame.data'=>'asc'))));//atribuir a variavel um resultado

    }

    public function add(){
        if (empty($this->request->data)){
            //data esta vazio -> carregar campos para inclusão
            //Carregar os estados - combo
            //dentro de cidades tenho relação c o modlo de estados
            $procedimentos = $this->Exame->Procedimento->find('list',array('fields'=> array('id','nome')));
            $this->set('procedimentos',$procedimentos);
        }else {
            //persistir os dados
            if($this->Exame->save($this->request->data)){
                $this->Flash->set('Exame Solicitado com Sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function edit($id=null){
        if(!$id){
            throw new NotFoundException("Exame Inválido!");
        }
        if (empty($this->request->data)){
            //data esta vazio -> carregar campos para edição
            //Carregar os estados - combo
            //dentro de cidades tenho relação c o modlo de estados
            $procedimentos  = $this->Exame->Procedimento->find('list',array('fields'=> array('id','nome')));
            $this->set('procedimentos',$procedimentos);
            //carregar os dados atuais
            $this->request->data = $this->Exame->findById($id);
        }else {
            //persistir os dados
            if($this->Exame->save($this->request->data)){
                $this->Flash->set('Exame atualizado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function agendados(){
        $this->set('exames', $this->Exame->find('all'));//atribuir a variavel um resultado
    }
    //
    // public function afterFilter(){
  	// 	parent::afterFilter();
  	// 		if($this->action != 'index'){
  	// 				$this->autenticar();
  	// 		}
  	// }
  	// public function autenticar(){
  	// 		if(!$this->Session->check('Paciente')){
  	// 				$this->redirect(array('controller'=>'pacientes', 'action'=>'index_login'));
  	// 				exit();
  	// 		}
  	// 		else{
  	// 				$paciente = $this->Session->read('Paciente');
    //
  	// 				$this->Flash->set('Seja bem-vindo(a) '.$paciente['0']['Paciente']['nome']);
  	// 		}
  	// }
    public function relatorio() {
        $paciente = $this->Session->read('Paciente');
        $this->loadModel("Exame");
        $exames = $this->Exame->findAllByPacienteId(array($paciente[0]['Paciente']['id']));

        $this->set('exames', $exames);

    }
    public function relatorioadmin() {
      $this->set('exames', $this->Exame->find('all', array('order'=>array('Exame.procedimento_id'=>'asc'))));//atribuir a variavel um resultado

    }
}
