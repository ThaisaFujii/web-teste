<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog using PHP and MySQL</title>
	</head>
	<body>
		<header>
        <?php 
		echo 'Olá, hoje é dia '.date('d/m/Y'). '! '; ?>
        <nav>
        <div id="menu_Align">
            <ul>
                <li id="menu_Logo">logoTipo</li>
                <li class="active"><a href="#">CATEGORIA 01/HOME</a></li>
                <li><a href="#"></a>CATEGORIA 02/CURIOSIDADE</li>
                <li><a href="#"></a>CATEGORIA 03/CONTATO</li>
                <li><a href="#"></a>CATEGORIA 04/PUBLIQUE</li>

            </ul>
		<div class="container">
            <h1>SEARCH</h1>
		</div>
        <div>
            <h3>HOME > CATEGORIA 01</h3>
        </div>
        </nav>
		
		</header>
        <section>
            <article>
                <img src="./img/projeto01.jpg" alt="post 01" title="" width="160px" height="140px"/>
                <img src="./img/projeto02.jpg" alt="post 02" title="" width="160px" height="140px"/>
                <img src="./img/projeto03.jpg" alt="post 03" title="" width="160px" height="140px"/>
                <img src="" alt="publicity" title="" width="" height=""/>
            </article>
        </section>
		
	</body>
</html>