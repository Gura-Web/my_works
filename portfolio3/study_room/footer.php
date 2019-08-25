    <footer class="footer">
        <div class="footer__container footer__container--study">
            <ul class="sns-list">
                <li class="sns-list__item"><a href="https://twitter.com/Gura_web"><img src="<?= IMG ?>icon-twitter_white.svg" alt="twitter"></a></li>
                <li class="sns-list__item"><a href="https://www.facebook.com/GuraWeb"><img src="<?= IMG ?>icon-facebook_white.svg" alt="faceboook"></a></li>
                <li class="sns-list__item"><a href="https://github.com/Gura-Web"><img src="<?= IMG ?>icon-github_white.svg" alt="github"></a></li>
            </ul>
            <p class="copy"><small>&copy; 2019 HIROKI OGURA</small></p>
        </div><!-- footer__container -->
        
    </footer>
    
</div><!-- body__container -->
    <script src="<?= PATH ?>../js/jquery.js"></script>
    <script src="<?= PATH ?>../js/vue.min.js"></script>
    <script src="<?= PATH ?>../js/mixitup.min.js"></script>
    <script src="<?= PATH ?>../js/script.js"></script>
    <script src="js/<?= JS ?>.js"></script>
    <script>
        // mixitup
        var containerEl = document.querySelector('.container');
        var mixer = mixitup(containerEl);
    </script>

</body>
</html>