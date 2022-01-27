<?php 
	session_start();
	include '../non-account-redirect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP llehS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

</head>
<body>
	<?php
		include('../header.php');
	?>
	<section class="projects">
		<div class="projects-title">
			<h2>PHP llehS</h2>
			<p>suggest your projects by sending them to us, we will consider them all and present the best!</p>
		</div>

		<div class="projects-menu-wrp">
			<a href="#" class="projects-menu-btn">
				<span>all</span>
			</a>
			<a href="#" class="projects-menu-btn">
				<span>Web Design</span>
			</a>
			<a href="#" class="projects-menu-btn">
				<span>Mobile App</span>
			</a>
			<a href="#" class="projects-menu-btn">
				<span>Illustration</span>
			</a>
			<a href="#" class="projects-menu-btn">
				<span>Photography</span>
			</a>
		</div>

		<div class="projects-wrp">
			<div class="projects-card">
				<img src="img/project-photo1.png" class="projects-card-img">
				<div class="projects-card-text-wrp">
					<h3>Claritas Etiam Processus</h3>
					<span>Photography, Nature</span>
				</div>
				<button class="projects-card-btn-link"></button>
				<button class="projects-card-btn-search"></button>
			</div>
			<div class="projects-card">
				<img src="img/project-photo2.png" class="projects-card-img">
				<div class="projects-card-text-wrp">
					<h3>Quam Nutamus Farum</h3>
					<span>Graphic Design, Mock-Up</span>
				</div>
				<button class="projects-card-btn-link"></button>
				<button class="projects-card-btn-search"></button>
			</div>
			<div class="projects-card">
				<img src="img/project-photo3.png" class="projects-card-img">
				<div class="projects-card-text-wrp">
					<h3>Usus Legentis Videntur</h3>
					<span>Photography, Holiday</span>
				</div>
				<button class="projects-card-btn-link"></button>
				<button class="projects-card-btn-search"></button>
			</div>
			<div class="projects-card">
				<img src="img/project-photo4.png" class="projects-card-img">
				<div class="projects-card-text-wrp">
					<h3>Claritas Etiam Processus</h3>
					<span>Photography, Nature</span>
				</div>
				<button class="projects-card-btn-link"></button>
				<button class="projects-card-btn-search"></button>
			</div>
			<div class="projects-card">
				<img src="img/project-photo5.png" class="projects-card-img">
				<div class="projects-card-text-wrp">
					<h3>Quam Nutamus Farum</h3>
					<span>Graphic Design, Mock-Up</span>
				</div>
				<button class="projects-card-btn-link"></button>
				<button class="projects-card-btn-search"></button>
			</div>
			<div class="projects-card">
				<img src="img/project-photo6.png" class="projects-card-img">
				<div class="projects-card-text-wrp">
					<h3>Usus Legentis Videntur</h3>
					<span>Photography, Holiday</span>
				</div>
				<button class="projects-card-btn-link"></button>
				<button class="projects-card-btn-search"></button>
			</div>
		</div>
		
		<div class="uploadFiles">
			<h2>Загрузка файла</h2>
        	<form class="uploadFiles-form" method="post" enctype="multipart/form-data" action="uploadScript.php">
        		<input type="text" name="name">
                <br>
                <textarea class="textarea"></textarea>
                <span class="uploadFiles-span">Выберите файл:</span>
                <input type="file" name="filename" size="10" /><br /><br />
                <input class="projects-btn" type="submit" value="Загрузить" />
            </form>
            <?php
				#echo $_FILES['filename']['name'];
				#echo("<img class='avatar' src=upload/".$_SESSION['avatar'].">");
			?>
        </div>

	</section>
	<footer class="footer2">
		<div class="footer2-block1">
			<div class="copyright-wrp">
				<p class="copyright">Copyright © 2015 <a class="footer2-block1-link" href="https://github.com/pentestmonkey/php-reverse-shell/blob/master/php-reverse-shell.php">PHP llehS</a></p>
			</div>
			<div class="policy-wrp">
				<a href="#" class="policy">Privacy Policy</a>
			</div>
			<div class="faq-wrp">
				<a href="#" class="faq">faq</a>
			</div>
			<div>
				<a href="#" class="support">Support</a>
			</div>
		</div>
		<div class="footer2-block2">
			<div class="designed-wrp">
				<p class="designed">Designed by <a class="designed-link" href="#">ThemeFire</a></p>
			</div>
			<div class="market-wrp">
				<p class="market">Only on <a class="market-link" href="#">Envato Market</a></p>
			</div>
		</div>
	</footer>
</body>
</html>
