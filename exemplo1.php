
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemplo 1</title>
	</head>
	<body>
		
		<div class="container">
		<?php 
		echo 'Olá, hoje é dia '.date('d/m/Y'). '! ';
		echo '1' + 1; 
		$php = '1';       // inteiro? Não, é do tipo String
		$php = $php + 1;  // inteiro? Sim
		$php = $php + 3.7;// $php é o double 5.7
		$php = 1 + 1.5;    // $php é o double 2.5
		// operadores lógicos
		$a = 4;
		$b = 5;
		if($a > $b && $a > 4)
		// operadores de comparação
		if(($a + $b != 9 )) //
		if($a == $b) //
		if($a+$b >= 0 ) //
		?>
		
		</div>
	</body>
</html>