<?php

Class Jornada extends AppModel {

	var $name = 'Jornada';
	var $displayField = 'nombre';
	var $hasMany = array(
        'Apuesta' => array(
            'className'    => 'Apuesta',
            'foreignKey'    => 'jornada_id'
         )
    );
	
	var $validate = array(
        'nombre' => array(
		
            'alphaNumeric' => array(
               'rule'     => 'alphaNumeric',
               'allowEmpty' => false,
               'message'  => 'Solo simbolos alfanumericos'
            )
            )
    );

}

?>