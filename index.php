<?php 

	if(count($_GET) > 0){
		$link = $_GET['link'];
		$user_link = $_GET['user_link'];
		$final_link = parse_url($link, PHP_URL_HOST);
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Тестовое задание</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div id="content">
		<form class="text-center" action="#"  method="get">
			<h2 >Сервис сокращения ссылок</h2>
			<div class="col-md-6">
				<h3>Ссылка которую нужно сократить</h3>
				<input type="text" placeholder="Введите ссылку" name="link"><br>
				<a href="<?=$link?>" target="iframe1" ><?=$final_link?></a>
			</div>
			<div class="col-md-6">
				<h3>Свой вариант ссылки</h3>
				<input type="text" placeholder="Введите ссылку" name="user_link"><br>
				<a href='<?=$link?>' target="iframe1"><?=$user_link?></a>
			</div>
			<input  type="submit" value="Сгенерировать"><br>
		</form> 
	</div>
</body>
</html>

