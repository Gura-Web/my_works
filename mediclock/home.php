<?php

    require_once('php/de_ogura.php');
        try{
            $pdo = new PDO(
                'mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset='.CHARSET,
                USER_NAME,
                USER_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
            $prepare = $pdo -> prepare('SELECT * FROM Medi_add_patient ORDER BY id DESC');// LIMIT 30 OFFSET 0
            //$prepare -> bindValue(PDO::PARAM_STR);
            $prepare -> execute();

            while($row = $prepare->fetch(PDO::FETCH_ASSOC)){
                $users[] = $row;
            }
        }
        catch(PDOException $e){
            header('Content-Type: text/plain; charset=UTF-8', true, 500);
            exit($e -> getMessage());
            print 'failure';
        }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MediClock - メイン画面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.ico">
    
</head>
<body>
    
    <header>
        <div id="head">
                <h1 id="logo"><a href="home.php"><img src="img/logo.png" alt="logo"></a></h1>
            <div id="login">
                <p id="loginTxt">〇〇でログインしています</p>
                <p id="logout"><i id="icon" class="fas fa-user"></i><a href="index.html">ログアウト</a></p>
            </div>
        </div>
    </header>
    <main>
        
        <section id="mainContents">
        
            <ul>
                
            <!-- for分と同じ　要素分だけ繰り返す -->
                <?php foreach ($users as $key => $value): ?> 
                    <li class="user" data-hour="<?= $value['hour'] ?>" data-minute="<?= $value['minute'] ?>"> 
                       <!-- <?= $value['name'] ?> --> 
                    </li>
                <?php endforeach; ?>

            </ul>  
            <!-- 配列が来た場合１個１個のデータに対して同じ処理を繰り返す。 -->

            <!-- 呼び出し -->
            <!-- data-buildingは任意の属性名　data-〇〇で作ると自作属性が作れる // buildingがカラム名　valueがbuilingに入ってる値をとってる -->
          
            <div id="dataWrapper">
                <div id="menu">
                    <p id="add"><a href="user_add_step1.html"><i class="cross fas fa-times"></i><span id="addTxt">新規追加</span></a></p>
                    <div id="move">
                        <p id="prev"><a href="#"><i id="arrowLeft" class="fas fa-angle-left"></i>prev</a></p>
                        <ol id="list">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li id="six"><a href="#">6</a></li>
                        </ol>
                        <p id="next"><a href="#">next<i id="arrowRight" class="fas fa-angle-right"></i></a></p>
                    </div>
                </div>
                <iframe id="user_list" name="userFrame" src="list/list1.html" frameborder="0" scrolling="no"></iframe>

                </div>
                <div id="history">
                    <p id="historyBtn"><a href="history.html"><img src="img/history.png" alt="">履歴</a></p>
                    <div id="newHistory">
                        <p id="newTxt">最新の履歴</p>
                        <ul id="historyList">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div id="help">
                        <p id="howToUse"><i class="far fa-question-circle"></i>使い方</p>
                    </div>
                </div>
                
        </section>

        
        <section id="timebar">
            <p id="start">0:00</p>
            <p id="between">12:00</p>
            <p id="end">0:00</p>
            <p id="bar"><img src="img/bar.png" alt=""></p>
            <div id="weather">
                <p><i id="sun" class="fas fa-sun"></i></p>
                <p><i id="moon" class="fas fa-moon"></i></p>
            </div>
            <div class="nameIcon"></div>
            <div class="nameIcon2"></div>
            <div class="nameIcon3"></div>
        </section>
        

        <div id="alert" class="scale">
            <p id="timeView">
                    <?php foreach ($users as $key => $value): ?> 
                        <span class="timeList">
                             <?= $value["hour"] ?>:<?= $value["minute"] ?>
                             通知
                        </span> 
                    <?php endforeach; ?>
                    
            </p>
                
            <div id="photo"></div>
            <p id="name">
                <?php foreach ($users as $key => $value): ?> 
                    <span class="userName">
                        <?= $value["name"] ?> 
                    </span>
                <?php endforeach; ?>
            </p>
            <p id="text">お薬の時間です。</p>
            <p id="drag">
                <?php foreach ($users as $key => $value): ?> 
                    <span class="medicine">
                        <?= $value["medicine"] ?> 
                    </span>
                <?php endforeach; ?>
            </p>
            <p id="comment">
                <?php foreach ($users as $key => $value): ?> 
                    <span class="commentList">
                        <?= $value["comment"] ?> 
                    </span>
                <?php endforeach; ?></p>
            <p id="button"><input class="ok" type="button" value="OK"  onclick="alarm_stop()"></p>
        </div>

        <p id="helpPop" class="none">
            <span id="closeBtn"><i class="fas fa-times"></i></span>
            <img src="img/help.png" alt="">
        </p>
    </main>
    <footer>
        <p id="copy">
            <small>&copy; 2018 たんぽぽねこGames</small>
        </p>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/home.js"></script>

</body>
</html>