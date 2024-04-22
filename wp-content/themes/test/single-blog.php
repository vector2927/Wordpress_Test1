<?php
/*
Template Name: details_page
*/
get_template_part('header');
?>

<main class="main main--blog">
        <div class="main-inner">
        <div class="blog-inner">
          <div class="blog-nav">
            <p class="blog-nav__btn jq-next-toggleSlide">BLOG MENU</p>
            <ul class="blog-navList">
              <li class="blog-navList__item blog-navList__item--on">
                <a href="#">カテゴリー1</a>
              </li>
              <li class="blog-navList__item">
                <a href="#">カテゴリー2</a>
              </li>
              <li class="blog-navList__item">
                <a href="#">カテゴリー3</a>
              </li>
            </ul>
          </div>

          <div class="article-main">
            <div class="article-inner">
              <h1 class="article-title"><?php the_title(); ?></h1>
              <ul class="blog-articles__item__tag">
                <li class="tag tag--sub"><a href="#">カテゴリ</a></li>
              </ul>
              <figure class="article-img">
                <img src="/wp-content/uploads/2024/03/Image.png" alt="" width="745" height="350" loading="eager" />
              </figure>
              <h2 class="title-section"><?php the_title(); ?></h2>
              <p class="text"><?php the_excerpt(); ?></p>
              <div class="article-section">
                <ul>
                  <li>
                    <h4>HeadLine</h4>
                    texttexttexttexttet
                  </li>
                  <li>
                    <h4>HeadLine2</h4>
                    texttexttextetxtext
                  </li>
                </ul>
              </div>
              <a href="#" class="link-frameBtn" target="_blank">
                <figure><img src="/wp-content/uploads/2024/03/Image.png" alt="テキストテキストテキストテキストテキストテキストテキストテキストテキスト" /></figure>
                <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </a>
              <a href="#" class="link-frameBtn" target="_blank">
                <figure><img src="/wp-content/uploads/2024/03/Image.png" alt="テキストテキストテキストテキストテキストテキストテキストテキストテキスト" /></figure>
                <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </a>
              <a href="#" class="link-frameBtn" target="_blank">
                <figure><img src="/wp-content/uploads/2024/03/Image.png" alt="テキストテキストテキストテキストテキストテキストテキストテキストテキスト" /></figure>
                <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              </a>
            </div>
          </div>
          <aside class="blog-block">
            <h2 class="title-lead">関連記事</h2>
            <ul class="blog-list blog-list--4col">
              <li class="blog-list__item js-scroll-motion on-motion">
                <a href="#">
                  <figure class="blog-list__image blog-list__image--work">
                    <img src="/wp-content/uploads/2024/03/Image.png" loading="lazy" alt="記事タイトル" width="315" height="185" />
                  </figure>
                  <h3 class="blog-list__title">記事タイトル</h3>
                  <p class="blog-list__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </a>
              </li>
              <li class="blog-list__item js-scroll-motion on-motion">
                <a href="#">
                  <figure class="blog-list__image blog-list__image--work">
                    <img src="/wp-content/uploads/2024/03/Image.png" loading="lazy" alt="記事タイトル" width="315" height="185" />
                  </figure>
                  <h3 class="blog-list__title">記事タイトル</h3>
                  <p class="blog-list__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </a>
              </li>
              <li class="blog-list__item js-scroll-motion on-motion">
                <a href="#">
                  <figure class="blog-list__image blog-list__image--work">
                    <img src="/wp-content/uploads/2024/03/Image.png" loading="lazy" alt="記事タイトル" width="315" height="185" />
                  </figure>
                  <h3 class="blog-list__title">記事タイトル</h3>
                  <p class="blog-list__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </a>
              </li>
              <li class="blog-list__item js-scroll-motion on-motion">
                <a href="#">
                  <figure class="blog-list__image blog-list__image--work">
                    <img src="/wp-content/uploads/2024/03/Image.png" loading="lazy" alt="記事タイトル" width="315" height="185" />
                  </figure>
                  <h3 class="blog-list__title">記事タイトル</h3>
                  <p class="blog-list__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                </a>
              </li>
            </ul>
          </aside>
          <section class="inquiry inquiry--blog js-scroll-motion on-motion">
            <a href="/contact" class="inquiry__link">
              <figure class="inquiry__image"></figure>
              <h2 class="inquiry__title">お問い合わせはこちらから</h2>
              <p class="btn-inquiry">お問い合わせする</p>
            </a>
          </section>
          <div class="article-contactBtn" style="opacity: 1; width: 900px; right: auto; bottom: 10px">
            <div class="article-contactBtn__inner"><a href="#" class="article-contactBtn__link">お問い合わせはこちら</a></div>
          </div>
        </div>
        </div>
</main>


<?php 
get_template_part('footer'); 
?>