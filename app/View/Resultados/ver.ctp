

<?php 

echo '<br><br>';

echo '<table>';
echo '<center>'.$jornada['Jornada']['nombre'].'</td>';


echo '</tr>';

for($con=1;$con<10;$con++){
	
	echo '<tr>';
	
	echo '<td>';
	echo $resultado['Resultado']['l'.$con];
	echo '</td>';
	
	echo '<td>'.$jornada['Jornada']['l'.$con].'</td>';
	echo '<td> vs </td>';
	
	echo '<td>'.$jornada['Jornada']['v'.$con].'</td>';
	
	echo '<td>';
	echo $resultado['Resultado']['v'.$con];
	echo '</td>';
	

	echo '</tr>';
	
	
}

echo $this->Html->link('Editar Resultados',array('action'=>'editar',$resultado['Resultado']['jornada_id']),array( 'class' => 'btn btn-info'));

echo  '&nbsp&nbsp'.$this->Html->link('Calcular Puntos',array('action'=>'calcular',$jornada['Jornada']['id']),array( 'class' => 'btn btn-warning'));
	
?>
</table>

</html>