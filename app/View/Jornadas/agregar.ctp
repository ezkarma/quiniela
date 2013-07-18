Agregar Jornada
<?php

echo $this->Form->create('Jornada', array(
    'inputDefaults' => array(
        'label' => false,
    )
));

echo '<center>'.$this->Form->input('nombre', array('label' => 'Nombre de la Jornada')).'</center>';

echo '<center><table>';

echo '<tr><th>Local</th><th></th><th>Visitante</th></tr>';

for($con=1;$con<10;$con++){
echo '<tr>';
echo '<td>'.$this->Form->input('l'.$con).'</td>';
echo '<td width="40px"><center>vs</center></td>';
echo '<td>'.$this->Form->input('v'.$con).'</td>';
echo '</tr>';
}

echo '</table></center>';
echo '<br><center><button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Guardar Jornada</button></center>';

?>



