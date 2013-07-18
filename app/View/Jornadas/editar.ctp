<?php

echo $this->Form->create('Jornada', array(
	'action'=>'editar',
    'inputDefaults' => array(
        'label' => false,
    )
));

echo '<center>';
echo '<b>Nombre de la Jornada</b>';
echo $this->Form->input('nombre');

echo '<table>';

echo '<tr><th>Local</th><th></th><th>Visitante</th></tr>';

for($con=1;$con<10;$con++){
echo '<tr>';
echo '<td>'.$this->Form->input('l'.$con).'</td>';
echo '<td width="40px"><center>vs</center></td>';
echo '<td>'.$this->Form->input('v'.$con).'</td>';
echo '</tr>';
}

echo '</table></center>';

echo $this->Form->input('id',array('type'=>'hidden'));

echo '<br><center><button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Guardar Cambios</button></center>';


?>