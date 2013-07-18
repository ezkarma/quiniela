<?php 

echo $jornada['Jornada']['nombre'];

echo '<br>';
?>
<table>
<tr>
<th>Local </th>
<th>Visitante </th>
</tr>

<tr>
	<td >
	<?php
	echo $jornada['Jornada']['l1'];
	?>
	</td>

	<td>
	<?php
	echo $jornada['Jornada']['v1'];
	?>
	</td>
</tr>

<tr>
	<td >
	<?php
	echo $jornada['Jornada']['l2'];
	?>
	</td>

	<td>
	<?php
	echo $jornada['Jornada']['v2'];
	?>
	</td>
</tr>

<tr>
	<td >
	<?php
	echo $jornada['Jornada']['l3'];
	?>
	</td>

	<td>
	<?php
	echo $jornada['Jornada']['v3'];
	?>
	</td>
</tr>

</table>
<?php
echo $this->Html->link('Back', array('action'=>'index'));
?>