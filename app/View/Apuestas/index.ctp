
<h2>Apuestas</h2>
<center>

Selecciona la Jornada:
<br><br>
<?php 
echo $this->Form->create('Apuesta', array(
    'inputDefaults' => array(
     'label' => false,
	 'div'=>false
    )
));

echo $this->Form->input('jornada_id'); 

echo '<br><br><center><button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Ver Apuestas</button></center>';

?>
</center>