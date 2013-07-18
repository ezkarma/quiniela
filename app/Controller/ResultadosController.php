<?php

Class ResultadosController extends AppController {

 var $name = 'Resultados';
 public $uses = array(
        'Jornada',
		'Apuesta',
		'Resultado'
    );
 
  function index(){

  $this->set('jornadas', $this->Resultado->Jornada->find('list'));
  
  if($this->request->is('post')){
	 $this->redirect(array('action'=>'ver',$this->request->data['Resultado']['jornada_id']));
  }
 
 }
 
 function ver($id=NULL){
  
  if($this->Resultado->find('first', array('conditions' => array('jornada_id' => $id)))){
	 $this->set('resultado',$this->Resultado->find('first', array('conditions' => array('jornada_id' => $id))));
}
 else {
		 
	 $nuevaEntrada= array('Resultado'=>array('jornada_id' => $id));
	 
	$this->Resultado->save($nuevaEntrada);
	$this->set('resultado',$this->Resultado->find('first', array('conditions' => array('jornada_id' => $id))));
	
 }
 
 $this->set('jornada',$this->Jornada->read(NULL,$id));
 
 }
 
function editar($id = null) {
		$ray = $this->Resultado->find('first', array('conditions' => array('jornada_id' => $id)));
		$this->Resultado->id = $ray['Resultado']['id'];
		
		if ($this->request->is('get')) {
			$this->request->data = $this->Resultado->read();
		} 
		
		else {
			if ($this->Resultado->save($this->request->data)) {
				$this->Session->setFlash('Se ha Actualizado la Jornada Exitosamente','success');
				$this->redirect(array('action' => 'ver',$id));
			}
		}
}
	
function calcular($id = null){
 
 $resultado = $this->Resultado->find('first', array('conditions' => array('jornada_id' => $id)));
 $apuestas = $this->Apuesta->find('all', array('conditions' => array('jornada_id' => $id)));
 
 
 foreach($apuestas as $apuesta){
 $puntaje=0;
 
 for($con=1;$con<10;$con++){
 if($resultado['Resultado']['l'.$con]>$resultado['Resultado']['v'.$con]) $win = 1;
 else if($resultado['Resultado']['l'.$con]==$resultado['Resultado']['v'.$con]) $win = 0;
 else if($resultado['Resultado']['l'.$con]<$resultado['Resultado']['v'.$con]) $win = -1;
 
 
if($apuesta['Apuesta']['l'.$con]>$apuesta['Apuesta']['v'.$con]) $res = 1;
else if($apuesta['Apuesta']['l'.$con]==$apuesta['Apuesta']['v'.$con]) $res = 0;
else if($apuesta['Apuesta']['l'.$con]<$apuesta['Apuesta']['v'.$con]) $res = -1;
 
 if($win==$res) $puntaje++;
 
 if($resultado['Resultado']['l'.$con]==$apuesta['Apuesta']['l'.$con] && $resultado['Resultado']['v'.$con] == $apuesta['Apuesta']['v'.$con]) $puntaje++;
 
 }
 
$this->Apuesta->id = $apuesta['Apuesta']['id'];
$this->Apuesta->saveField('puntos', $puntaje);
 
 }
 
 $this->Session->setFlash('Se han calculado el Puntaje de Cada Jugador. Revise la tabla de apuestas','success');
 
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