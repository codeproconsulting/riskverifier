<?php
/**
 * The template for displaying all pages
 *
 * @package RiskVerifier
 */

get_header();
?>

<main class="section section-white">
  <div class="container" style="max-width: 900px; margin: 0 auto;">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <header class="section-header" style="text-align: left; margin-bottom: 30px;">
          <h1 class="section-title"><?php the_title(); ?></h1>
        </header>

        <div class="entry-content" style="line-height: 1.8; color: rgba(8,61,119,0.9); font-size: 1.05rem;">
          <?php the_content(); ?>
        </div>
        <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
