Agregar Apuesta
<?php

echo $this->Form->create('Apuesta', array(
    'inputDefaults' => array(
     'label' => false,
	 'div'=>false
    )
));


echo '<center>'.$jornada['Jornada']['nombre'].'</center><br>';
echo $this->Form->hidden('jornada_id',array('default'=>$jornada['Jornada']['id']));


echo '<center>'.$this->Form->input('nombre_jugador', array('label' => 'Nombre del Jugador')).'</center>';

echo '<center><table>';

echo '<tr><th>Local</th><th></th><th>Visitante</th></tr>';

for($con=1;$con<10;$con++){
	echo '<tr>';
	echo '<td>'.$this->Form->input('l'.$con)." ".$jornada['Jornada']['l'.$con].'</td>';
	echo '<td width="40px"><center>vs</center></td>';
	echo '<td>'." ".$jornada['Jornada']['v'.$con]." ".$this->Form->input('v'.$con).'</td>';
	echo '</tr>';
}



echo '</table></center>';
echo '<br><center><button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Guardar Jornada</button></center>';

?>



