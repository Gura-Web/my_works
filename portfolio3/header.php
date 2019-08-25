<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136495833-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-136495833-3');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="<?= IMG ?>favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://fonts.googleapis.com/css?family=Anton|M+PLUS+1p:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.2.0/dist/css/yakuhanjp.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo SITE_NAME ?></title>

</head>
<body class="body">

    <div class="body__container--<?= PAGE ?>">
        <header class="header">
            <div class="header__container">
                <h1 class="logo"><a href="index.php"><img src="<?= IMG ?>logo.svg" alt="UPDATE"></a></h1>
                <div class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="navi">
                    <ul class="navi__list">
                        <li class="navi__item"><a href="index.php">HOME</a></li>
                        <li class="navi__item"><a href="profile.php">PROFILE</a></li>
                        <li class="navi__item"><a href="works.php">WORKS</a></li>
                        <li class="navi__item"><a href="https://gura-web.com/">BLOG</a></li>
                        <li class="navi__item"><a href="study_room/">STUDY ROOM</a></li>
                    </ul>
                </nav>