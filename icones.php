<?php
	$handle = fopen("css/icomoon.css", "r");
	if ( $handle != false )
		while ( !feof($handle) ) 
		{
			$row = fgets($handle);
			
			$icone = strstr($row, ".icon-");
			if ( $icone != false )
			{
				$icone = explode(".", $icone)["1"];
				$icone = explode(":", $icone)["0"];
				
				$linhas[] = $icone;
			}
		}
	fclose($handle);
?>

<html>
	<head>
		<title>Ícones</title>
		<meta charset="utf-8">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div align="center" style="color:black;font-family: Arial, Helvetica, sans-serif;font-size:16px;">
			Exibindo: <b>/css/icomoon.css</b>
			<br>
			<br>
			<table border="1">
				<col width="75px">
				<col width="225px">
				<col width="75px">
				<col width="225px">
				<col width="75px">
				<col width="225px">
				<col width="75px">
				<col width="225px">
				
				<thead>
					<th height="40px">ÍCONE</th>
					<th>NOME</th>
					<th>ÍCONE</th>
					<th>NOME</th>
					<th>ÍCONE</th>
					<th>NOME</th>
					<th>ÍCONE</th>
					<th>NOME</th>
				</thead>
				
				<tbody>
					<?php
						for ($i=0, $cols=1; $i< count($linhas); $i++, $cols++)
						{
							$linha = $linhas[$i];
							
							if ( $cols == 1 ) echo "<tr height='30'>";
							
							echo "
								<td><i class='$linha'></i></td>
								<td>$linha</td>
							";
							
							if ( $cols == 4 )
							{
								$cols = 0;
								echo "</tr>";
							}
						}
					?>
				</tbody>
			</table>	
		</div>
	</body>
</html>