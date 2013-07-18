<?php

Class Resultado extends AppModel {
	
	
	var $name = 'resultado';
	var $belongsTo = array(
        'Jornada' => array(
            'className'    => 'Jornada',
            'foreignKey'    => 'jornada_id'
         )
    );
	
	

}

?>