<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BookList. Каталог и рейтинг</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
	<link href="/css/my.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="topbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">BookList</a>
          <ul class="nav">
		    <li><a href="#home">Главная</a></li>
            <li><a href="#new">Недавно добавленные</a></li>
            <li><a href="#catalog">Каталог</a></li>
            <li><a href="#contact">Контакты</a></li>
          </ul>
		  <form class="pull-left" action="">
            <input type="text" placeholder="Поиск книг" />
          </form>
          <p class="pull-right">Вы вошли как: <a href="#">username</a></p>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="sidebar">
        <div class="well">
          <h5>Рекомендуемые</h5>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
          </ul>
          <h5>Лучшие</h5>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
			<?php if($error){?>
				<div class="alert-message block-message error"><p><strong>Неверное имя пользователя или пароль</p></div>
			<?php }?>
			<form action="" method="post">
			<fieldset>
			  <legend>Авторизация</legend>
			  <div class="clearfix">
				<div class="input">
				  <input class="xlarge" name="username" size="30" type="text" placeholder="Имя пользователя"/>
				</div>
			  </div><!-- /clearfix -->
			  <div class="clearfix">
				<div class="input">
				  <input class="xlarge"  name="password" size="30" type="password" placeholder="Пароль"/>
				</div>
				<br>
				<div class="input">
				  <button type="submit" class="btn large primary" name="submit" />Войти</button>
				</div>
			  </div><!-- /clearfix -->
			</fieldset>
			</form>
		</div>    
        <footer>
          <p>&copy; Поцапай Дмитрий 2012</p>
        </footer>
      </div>
    </div>

  </body>
</html>
