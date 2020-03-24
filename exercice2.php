<!DOCTYPE html>
 <html>
<head>
	<title></title>
</head>
<body>
	<form  action="exercice2.php" method="post">

		<h1 style="margin: 0 auto; margin-left:38%; ">choose a language please </h1>

		<select style=" margin-left:43%; margin-top: 18px; " name="choice">
		
			<option value=français>français</option>
			<option value[1]=1>anglais</option>

		</select>
		<input type="submit" name="bouton" value="afficher">

	</form>
	<?php
	
	$tab=
	array( 
	'1'=>['janvrier','january'],
    '2'=>['febrier','february'],
    '3'=>['mars','march'],
    '4'=>['avril','april'],
    '5'=>['mai','may'],
    '6'=>['juin','june'],
    '7'=> ['juillet','jully'],
    '8'=>['aout','august'],
    '9'=>['septembre','september'],
    '10'=>['octobre','october'],
    '11'=>['novembre','november'],
	'12'=>['decembre','december'],);
	
	if (isset($_POST['bouton']))
	{
		$choice = $_POST['choice'];
		switch ($choice) {
			case'français':
				echo '<table style="height: 500px; width: 60%; margin: 0 auto; border: 1px solid black;" >';
			for ($i= 1 ; $i <= 12 ; $i+=3) 
			{ 
				echo '<tr>';
				for ($j= $i ; $j <= $i+2 ; $j++ ) 
				{ 
								
					echo '<td td style=" border: 1px solid black; text-align: center ">'.$j.'</td>';
					echo '<td td style=" border: 1px solid black; text-align: center ">'.$tab[$j][0].'</td>';
								
				}
				echo'</tr>';
			}
			echo'</table>';
				break;
			case 'anglais':
			echo '<table style="height: 500px; margin-top:18px; width: 60%; margin: 0 auto; border: 1px solid black;">';
			for ($i= 1 ; $i <= 12 ; $i+=3) 
			{ 
				echo '<tr>';
				for ($j= $i ; $j <= $i+2 ; $j++ ) 
					{ 
							
						echo '<td td style=" border: 1px solid black; text-align: center ">'.$j.'</td>';
						echo '<td td style=" border: 1px solid black; text-align: center ">'.$tab[$j][1].'</td>';
							//var_dump($tab);
					}
				echo'</tr>';
			}
			echo'</table>';
			break;
			}
			
	}	
		
		
		

	?>

</body>
</html>