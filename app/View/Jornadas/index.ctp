<center><table width="60%">
<tr>
<th width="40%">Nombre</th>
<th></th>
<th></th>
<th></th>
</tr>

<?php

foreach ($jornadas as $jornada) {
echo '<tr><td>';
echo $jornada['Jornada']['nombre'];
echo '</td>';

echo '<td><center>';
echo $this->Html->link('Ver',array('action'=>'ver',$jornada['Jornada']['id']));
echo '</td></center>';

echo '<td><center>';
echo $this->Html->link('Editar',array('action'=>'editar',$jornada['Jornada']['id']));
echo '</td></center>';

echo '<td><center>';
echo $this->Html->link('Eliminar',array('action'=>'eliminar',$jornada['Jornada']['id']),NULL,'Estas seguro que deseas eliminar la jornada?');
echo '</td></center></tr>';

}

?>

</table>
<center>
<?php

echo $this->Form->create('Jornada', array(
    'inputDefaults' => array(
     'label' => false,
	 'div'=>false
    )
));


?>
<p><br><center><button type="submit" class="btn btn-success"><i class="icon-ok icon-white"></i> Agregar Jornada</button></center></p>
