<?php
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

                <section class="blog-article">
                    <h2 class="blog-article__title">
                        <div class="blog-article__title__main">新着記事</div>
                    </h2>
                    <ol class="blog-articles">
                    <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
  'post_type' => 'blog', // Change to 'page' if displaying pages
  'posts_per_page' => 4, // Number of posts to show per page
  'paged' => $paged, // Enable pagination (optional)
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 

  $one_week_ago = strtotime( '-1 week' ); // Define threshold (1 week ago)
  $is_recent = get_the_date( 'U' ) >= $one_week_ago; // Check if post is recent

  $newClass = ''; // Set base class

  if ( $is_recent ) {
    $newClass = 'blog-articles__item__new'; // Add 'recent-post' class if recent
  }

  ?>

                        <li class="blog-articles__item <?php echo $newClass; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <figure class="blog-articles__item__img">
                                    <img srcset="/wp-content/themes/test/assets/images/Image.png" alt="" width="280" height="130" loading="lazy">
                                </figure>
                                <h3 class="blog-articles__item__title">
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                        </li>
                        
<?php endwhile; wp_reset_postdata(); else : ?>

  <p>No posts found!</p>

<?php endif; ?>
                    </ol>
                    <div class="blog-btn">
                        <a class="blog-btn__link" href="/blog">すべての記事を見る</a>
                    </div>
                </section>
                <section class="inquiry inquiry--blog js-scroll-motion on-motion">
                    <a href="/contact" class="inquiry__link">
                        <figure class="inquiry__image"></figure>
                        <h2 class="inquiry__title">お問い合わせはこちらから</h2>
                        <p class="btn-inquiry">お問い合わせする</p>
                    </a>
                </section>

                <div class="article-contactBtn" style="opacity: 1; width: 900px; right: auto; bottom: 10px;">
                    <div class="article-contactBtn__inner"><a href="#" class="article-contactBtn__link">お問い合わせはこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php 
get_template_part('footer'); 
?>