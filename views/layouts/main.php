<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Подписка</title>

    <!-- Bootstrap -->
    <link href="
    <?php
            echo Yii::app()->assetManager->getPublishedUrl(                
                Yii::getPathOfAlias('application.vendor.twbs.bootstrap.dist.css').'/bootstrap.css'
            )
    ?>" rel="stylesheet">
    <link href="
    <?php
            echo Yii::app()->assetManager->getPublishedUrl(                
                Yii::getPathOfAlias('application.vendor.twbs.bootstrap.dist.css').'/bootstrap-theme.css'
            )
    ?>" rel="stylesheet">
    <link href="
    <?php
            echo Yii::app()->assetManager->getPublishedUrl(                
                Yii::getPathOfAlias('application.css').'/main.css'
            )
    ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
        <h1>Тестовое задание</h1>
    </div>

    <div class="wrap">
        <?=$content?>
    </div>
    
    <div class="footer text-center">
        <h4>(c) IF 2017</h4>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/twbs/dist/js/bootstrap.min.js"></script>
  </body>
</html>