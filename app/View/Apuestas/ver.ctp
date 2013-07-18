<html>
 <style>
      .rotate_text
      {
         -moz-transform:rotate(-90deg); 
         -moz-transform-origin: top left;
         -webkit-transform: rotate(-90deg);
         -webkit-transform-origin: top left;
         -o-transform: rotate(-90deg);
         -o-transform-origin:  top left;
          position:relative;
         top:20px;
      }
  
      table
      {
         border: 1px solid black;
         table-layout: fixed;
         width: 69px; /*Table width must be set or it wont resize the cells*/
      }
      th, td 
      {
          border: 1px solid black;
          width: 23px;
      }
      .rotated_cell
      {
         height:150px;
         vertical-align:bottom
      }
   </style>
  

<?php 
echo $this->Html->link('Agregar Apuesta',array('action'=>'agregar',$jornada['Jornada']['id']),array( 'class' => 'btn btn-info'));
echo '<br><br>';

echo '<table border="1" >';


echo '<tr>';
echo '<td style="width:150px"><center>'.$jornada['Jornada']['nombre'].'</center></td>';
foreach($apuestas as $apuesta){
	echo '<td class="rotated_cell">';
	echo "<div class='rotate_text'>".$apuesta['Apuesta']['nombre_jugador']."</div>";
	echo '</td>';
}

echo '</tr>';

for($con=1;$con<10;$con++){
	echo '<tr><td></td></tr>';
	echo '<td>'.$jornada['Jornada']['l'.$con].'</td>';
	foreach($apuestas as $apuesta){
	echo '<td>';
	echo $apuesta['Apuesta']['l'.$con];
	echo '</td>';

	}
	echo '</tr>';

	echo '<tr>';
	echo '<td>'.$jornada['Jornada']['v'.$con].'</td>';
	foreach($apuestas as $apuesta){
	echo '<td>';
	echo $apuesta['Apuesta']['v'.$con];
	echo '</td>';

	}
	echo '</tr>';
	
	
}

echo '<tr><td></td></tr><tr>';
echo '<td>Puntos</td>';
foreach($apuestas as $apuesta){
echo '<td>'.$apuesta['Apuesta']['puntos'].'</td>';
}
echo  '</tr>';

?>
</table>
</html>