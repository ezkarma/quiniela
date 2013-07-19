<?php 

echo 'Jornada: '.$jornada['Jornada']['nombre'];

echo '<br>';
?>
<table>
<tr>
<th>Local </th>
<th>Visitante </th>
</tr>

<?php
for($con=1;$con<10;$con++){
echo '<tr><td>';
echo $jornada['Jornada']['l'.$con];
echo '</td><td> vs </td><td>';
echo $jornada['Jornada']['v'.$con];
echo '</td></tr>';
}
?>

</table>
<?php
echo $this->Html->link('Regresar', array('action'=>'index'));
?>