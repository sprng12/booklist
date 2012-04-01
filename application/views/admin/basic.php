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
    <script type="text/javascript" src="/jquery/bootstrap-alerts.js"></script>
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
        $(function(){
            $("#nav_<?php echo $nav; ?>").addClass("active");
        })
    </script>
  </head>
<body>
    
    <div class="fluid-container sidebar-right">
       
        <div class="fluid-content">
            <ul class="nav pills">
              <li class="active"><a href="/">На главную</a></li>
            </ul>
            <?php if(isset($success)){?>
            <script type="text/javascript">
                  alert('Успешное добавление')
            </script>
            <?php }?>
            <ul class="nav tabs">
              <li id="nav_book"><a href="/admin/book">Добавить книгу</a></li>
              <li id="nav_author"><a href="/admin/author">Добавить автора</a></li>  
              <li id="nav_genre"><a href="/admin/genre">Добавить жанр</a></li>
              <li id="nav_lang"><a href="/admin/lang">Добавить язык</a></li>
            </ul>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    
                    <?php echo $form; ?>
                     <div class="form-actions">
                        <button type="submit" class="btn success" name="submit"><i class="icon white ok"></i>&nbsp;Добавить</button>
                        <button type="reset" class="btn" name="submit">Очистить</button>
                     </div>
                </fieldset>
              </form>
            <hr>
        </div>
        
        
    </div>
</body>
</html>
