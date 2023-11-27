<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="weterynarz.css">
	<title>Weterynarz</title>
</head>
<body>
	<header>
		<h1>GABINET WETERYNARYJNY</h1>
	</header>
	<nav>
		<h2>PSY</h2>
		<?php
		$connect = mysqli_connect('localhost','root','','weterynarz');
		$ask = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE `rodzaj`= 1";
		$result = mysqli_query($connect, $ask);
		while ( $line= mysqli_fetch_row($result))
		{
			echo $line[0].' '.$line[1].' '.$line[2].'<br>';
		}


		mysqli_close($connect);
		?>
		<h2>KOTY</h2>
		<?php
		$connect1 = mysqli_connect('localhost','root','','weterynarz');
		$ask1 = "SELECT id, imie, wlasciciel FROM `zwierzeta` WHERE `rodzaj`= 2";
		$result1 =mysqli_query($connect1,$ask1);
		while ( $line1= mysqli_fetch_row($result1))
		{
			echo $line1[0].' '.$line1[1].' '.$line1[2].'<br>';
		}


		mysqli_close($connect1);
		?>
	</nav>
	<main>
		<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
		<?php
		$connect2 = mysqli_connect('localhost','root','','weterynarz');
		$ask2 = "SELECT imie, telefon, szczepienie, opis FROM `zwierzeta`";
		$result2 = mysqli_query($connect2, $ask2) ;
		while ($line2=mysqli_fetch_row($result2)) 
		{
			echo "Pacjent: ".$line2[0].'<br>'.'Telefon właściciela: '.$line2[1].' '.' ostatnie szczepienie: '.$line2[2].'<br>'.'informacje: '.$line2[3].'<hr>';
		}


		mysqli_close($connect2);
		?>
	</main>
	<aside>
		<h2>WETERYNARZ</h2>
		<a href="logo.jpg"><img src="logo-mini.jpg"></a> 
		<p>Krzysztof Nowakowski, lekarz weterynarii</p>
		<h2>GODZINY PRZYJĘĆ</h2>
		<table>
			<tr>
				<th>Poniedziałek</th><th>15:00 - 19:00</th>
			</tr>
			<tr>
				<th>Wtorek</th><th>15:00 - 19:00</th>
			</tr>
		</table>
	</aside>
</body>
</html>