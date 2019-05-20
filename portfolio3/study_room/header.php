<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="<?= IMG ?>favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://fonts.googleapis.com/css?family=Anton|M+PLUS+1p:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS ?>style.css">
    <title><?php echo SITE_NAME ?></title>

</head>
<body class="body">

    <div class="body__container--<?= PAGE ?>">
        <header class="header">
            <div class="header__container">
                <h1 class="logo logo--study"><a href="<?= PATH ?>index.php"><img src="<?= IMG ?>deco-study_room.svg" alt="UPDATE"></a></h1>
                <div class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="navi navi--study">
                    <ul class="navi__list">
                        <li class="navi__item"><a href="<?= PATH ?>../index.php">ポートフォリオTOP</a></li>
                        <li class="navi__item"><a href="design.php">デザイン</a></li>
                    </ul>
                </nav>
                <div class="go-top go-top--study"><a href="#"></a></div>
            </div><!-- header__container -->
        </header>