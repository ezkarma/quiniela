<?php

Class Apuesta extends AppModel {
	//public $hasOne = 'Jornada';
	
	var $name = 'apuesta';
	var $belongsTo = array(
        'Jornada' => array(
            'className'    => 'Jornada',
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