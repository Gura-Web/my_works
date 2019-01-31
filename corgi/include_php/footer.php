    <footer class="footer">
        <div class="footer-container">
            <nav class="footer__nav">
                <h2 class="footer__logo"><img src="<?= IMG ?>logo_main.png" alt="CORGI"></h2>
            <ul class="footer__col footer__col1">
                <li class="footer__list"><a href="feature.php"></a><span class="footer__en">Feature</span>特徴</a>
                    <li class="footer__item"><a href="#">- コーギーの種類</a></li>
                    <li class="footer__item"><a href="#">- コーギーの見た目</a></li>
                    <li class="footer__item"><a href="#">- 頭の良さ</a></li>
                    <li class="footer__item"><a href="#">- 性格</a></li>
                    <li class="footer__item"><a href="#">- 面白い特徴</a></li>
                </li>
            </ul>
            <ul class="footer__col footer__col1">
                <li class="footer__list"><a href="feature.php"></a><span class="footer__en">Born</span>生い立ち</a>
                    <li class="footer__item"><a href="#">- イギリス生まれ</a></li>
                    <li class="footer__item"><a href="#">- 元牧羊犬</a></li>
                    <li class="footer__item"><a href="#">- 個体差が大きい</a></li>
                    <li class="footer__item"><a href="#">- 毛の色</a></li>
                 </li>
            </ul>

            <ul class="footer__col footer__col2">
                <li class="footer__list"><a href="feature.php"></a><span class="footer__en">Keep</span>飼い方</a>
                    <li class="footer__item"><a href="#">- 散歩時間</a></li>
                    <li class="footer__item"><a href="#">- コーギーの食事</a></li>
                    <li class="footer__item"><a href="#">- なりやすい病気</a></li>
                    <li class="footer__item"><a href="#">- コーギーの寿命</a></li>
                    <li class="footer__item"><a href="#">- コーギーの癖</a></li>
                </li>
            </ul>
            <ul class="footer__col footer__col2">
                <li class="footer__list"><a href="feature.php"></a><span class="footer__en">Question</span>コーギーの疑問</a>
                    <li class="footer__item"><a href="#">- よくある質問</a></li>
                </li>
            </ul>
            </nav>
        </div>
    </footer>
    <div class="goTop"><a href="#"><img src="<?= IMG ?>hand_up.png" alt=""></a></div>
    <script>
        var link = document.getElementsByTagName("a");
        for (var i= 0; i<link.length; i++) {
            link[i].onclick = function () {
                alert("コーディングはトップページのみで、その他はデザインになります。");
            }
        }
        
    </script>