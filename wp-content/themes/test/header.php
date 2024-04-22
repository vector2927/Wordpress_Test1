<?php
/**
 * Header Template
 * 
 * @package smt-wp-test
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/editor-blog.css">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body class="body body--blog">
    <header id="header" class="header header--blog">
        <div class="header-globalNav">
            <label for="globalNavOpen" class="header-globalNav__opener">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <input type="checkbox" id="globalNavOpen" class="header-globalNav__checkbox">
            <div class="header-globalNav__inner">
                <div class="header-globalNavList__wrap">
                    <ul class="header-globalNavList clearfix" id="header-navs">
                        <li class="header-globalNavList__item">
                            <a href="#" class="header-globalNavList__link">
                                <p class="header-globalNavList__caption">HOME<span>ホーム</span></p>
                            </a>
                        </li>
                        <li class="header-globalNavList__item">
                            <a href="/blog/" class="header-globalNavList__link header-globalNavList__link--top">
                                <p class="header-globalNavList__caption">POST<span>記事</span></p>
                                <label for="globalSubNavOpen02" class="header-globalNavList__opener">
                                    <span></span>
                                    <span></span>
                                </label>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>