<?php

Class JornadasController extends AppController {

	var $name = 'Jornadas';
	 public $uses = array(
        'Jornada',
		'Apuesta',
		'Resultado'
    );

	 function index(){
		$this->set('jornadas',$this->Jornada->find('all'));
		
		if($this->request->is('post')){
		$this->redirect(array('action'=>'agregar'));
		}
	 }
 
	 function ver( $id = NULL){
			$this->set('jornada',$this->Jornada->read(NULL,$id));
	}
	 
	function agregar(){
		if($this->request->is('post')){
		
		if ($this->Jornada->save($this->request->data)) {
						
				$this->Session->setFlash('Se ha Guardado la Jornada Exitosamente','success');
				$this->redirect(array('action'=>'index'));
			}
		
		}
	}
	
	
	function editar($id = null) {
		$this->Jornada->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Jornada->read();
		} else {
			if ($this->Jornada->save($this->request->data)) {
				$this->Session->setFlash('Se ha Actualizado la Jornada Exitosamente','success');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
		function eliminar($id = NULL){
		$this->Jornada->delete($id);
		$this->Session->setFlash('Se ha eliminado la Jornada', 'success');
		$this->redirect(array('action'=>'index'));
	
	}
 
}
?>