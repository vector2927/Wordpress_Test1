<?php
/**
 * Footer Template
 * 
 * @package smt-wp-test
 */
?>

<div class="footer-pathNav">
        <p class="footer-pathNav__spHome"><a href="#"><span>ホーム</span></a></p>
        <ul class="footer-pathNavList" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li class="footer-pathNavList__item footer-pathNavList__item--home" itemprop="itemListElement" itemscope=""
                itemtype="http://schema.org/ListItem">
                <a href="#" itemprop="item"><span itemprop="name">ホーム</span></a>
                <meta itemprop="position" content="1">
            </li>
        </ul>
    </div>

    <footer class="footer">
        <div class="footer-sns">
            <p class="footer-sns__title">Footer</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>
