<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>BookList: рекомендация книг</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/my.css" rel="stylesheet">
    <link href="/jquery/ui.stars/jquery.ui.stars.css" rel="stylesheet">
    <script type="text/javascript" src="/jquery/jquery.js"></script>
    <?php foreach($scripts as $script){?> <script type="text/javascript" src="<?php echo $script; ?>"></script> <?php }?>
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
    
    <script type="text/javascript">
        $('.dropdown-toggle').dropdown()
    </script>
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="fluid-container">
          <a class="brand" href="/">BookList</a>
          <ul class="nav">
            <li <?php if($nav == 'main'){?> class="active" <?php }?> ><a href="/">Главная</a></li>
            <li <?php if($nav == 'catalog'){?> class="active" <?php }?>><a href="/catalog/1">Книги</a></li>
			
          </ul>
		 
		  <?php echo $login; ?> 
        </div>
      </div>
    </div>

    <div class="fluid-container sidebar-right">
      <div class="fluid-sidebar">
        <div class="well">
          <ul class="nav list">
            <li class="nav-header">Рекомендуемые</li>
            <?php foreach($rec as $book) {?>
            <li>
                <a title="общий рейтинг: <?php echo $book['avg_rate']; ?>" href="/catalog/book/<?php echo $book['book_id']; ?>"><?php echo $book['book_title']; ?></a>
            </li>
            <?php } ?>

            <li class="nav-header">Лучшие</li>
            <?php foreach($best as $book) {?>
            <li>
                <a title="общий рейтинг: <?php echo $book['rate']; ?>" href="/catalog/book/<?php echo $book['book_id']; ?>"><?php echo $book['book_title']; ?></a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="fluid-content">
		<?php echo $content; ?>
		<hr>
        <footer>
          <p>&copy; Поцапай Дмитрий 2012</p>
        </footer>
      </div>
    </div>

  </body>
</html>