<?php

echo $this->Form->create('Resultado', array(
    'inputDefaults' => array(
    'label' => false,
    )
));

echo '<table>';
for($con=1;$con<10;$con++){
echo '<tr>';
echo '<td>'.$this->Form->input('l'.$con).'</td>';
echo '<td>vs</td>';
echo '<td>'.$this->Form->input('v'.$con).'</td>';
echo '</tr>';
}
echo '</table>';

echo $this->Form->input('id',array('type'=>'hidden'));

echo $this->Form->end('Guardar Cambios');


?>