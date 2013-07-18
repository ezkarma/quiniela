<?php

Class ApuestasController extends AppController {

 var $name = 'Apuestas';
 public $uses = array(
        'Jornada',
		'Apuesta'
    );
 
  function index(){

  $this->set('jornadas', $this->Apuesta->Jornada->find('list'));
  
  if($this->request->is('post')){
	 $this->redirect(array('action'=>'ver',$this->request->data['Apuesta']['jornada_id']));
  }
 
 }
 
 function ver($id=NULL){
  
 $this->set('apuestas',$this->Apuesta->find('all', array('conditions' => array('Apuesta.jornada_id' => $id))));
 
 $this->set('jornada',$this->Jornada->read(NULL,$id));
 
 }
 
 function agregar($id=NULL){

	$this->set('jornadas', $this->Apuesta->Jornada->find('list'));

  
 	$this->set('jornada',$this->Jornada->read(NULL,$id));
	
	if($this->request->is('post')){
	
	if ($this->Apuesta->save($this->request->data)) {
                   
			$this->Session->setFlash('Se ha Guardado la Apuesta Exitosamente','success');
            $this->redirect(array('action'=>'agregar',$id));
        }
		
	}
		
}

}
?>