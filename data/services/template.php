<!DOCTYPE html>
<html>
	<head>
		<title><?php echo !empty($name) ? $name." - " : ""; ?>Architettura degli Elaboratori - DAIS Ca' Foscari</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/style/css-normalize.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/style/style.css">
		<!-- favicon per tutti -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $domain; ?>/img/fav/iOS/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/fav/android/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/fav/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/fav/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/fav/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/fav/favicon-96x96.png" sizes="96x96">
		<link rel="manifest" href="<?php echo $domain; ?>/img/fav/android/manifest.json">
		<link rel="mask-icon" href="<?php echo $domain; ?>/img/fav/safari-pinned-tab.svg">
		<link rel="shortcut icon" href="<?php echo $domain; ?>/img/fav/favicon.ico">
		<meta name="msapplication-TileColor" content="" property="">
		<meta name="msapplication-TileImage" content="<?php echo $domain; ?>/img/fav/ms/mstile-144x144.png">
		<meta name="msapplication-config" content="<?php echo $domain; ?>/img/fav/ms/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<!-- Viewport anche per i cellulari -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Alexander P. Cerutti">
		<meta name="description" content="Sito interno della Ca' Foscari di Venezia per la disciplina di Architettura degli Elaboratori">
	</head>
	<body>
		<div class="wrap">
			<header>
				<div class="titleBlock">
					<a href="<?php echo $domain; ?>">
						<h1>Architettura degli Elaboratori</h1>
						<h2>Dipartimento di Scienze Ambientali, Informatica e Statistica</h2>
					</a>
				</div>
			</header>
			<!-- Separatore: soluzione Cross Device -->
			<div class="separator"></div>
			<label for="showMenu"><span></span></label>
			<input type="checkbox" name="showMenu" id="showMenu">
			<nav>
				<ul>
					<?php createMenu($domain);?>
				</ul>
			</nav>
			<article>
				<section class="content">
					<?php echo $router; ?>
				</section>
			</article>
			<!-- Separatore: soluzione Cross Device -->
			<div class="separator"></div>
			<footer>
				<div class="credits">
					<span><a href="http://unive.it/">Università Ca' Foscari - Venezia</a> - <em><a target="_blank" title="Dipartimento di Scienze Ambientali, Informatica e Statistica" href="http://www.unive.it/nqcontent.cfm?a_id=135110"><b>DAIS</b></a></em></span>
					<div>Creato da Alexander P. Cerutti</div>
				</div>
			</footer>
		</div>
	</body>
</html>