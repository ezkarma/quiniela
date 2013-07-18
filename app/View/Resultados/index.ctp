Selecciona la Jornada:
<?php 
echo $this->Form->create('Resultado', array(
    'inputDefaults' => array(
     'label' => false,
	 'div'=>false
    )
));

echo $this->Form->input('jornada_id'); 

echo '<br><center><button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Ver Resultados</button></center>';

?>