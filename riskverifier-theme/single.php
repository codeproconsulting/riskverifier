<?php
/**
 * The template for displaying all single posts
 *
 * @package RiskVerifier
 */

get_header();
?>

<main class="section section-white">
  <div class="container" style="max-width: 860px; margin: 0 auto;">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="section-header" style="text-align: left; margin-bottom: 24px;">
            <div class="badge badge-blue">Risk Intelligence</div>
            <h1 class="section-title"><?php the_title(); ?></h1>
            <div style="color: rgba(8,61,119,0.6); font-size: 0.875rem;">
              Published on <?php echo get_the_date(); ?> • By <?php the_author(); ?>
            </div>
          </header>

          <div class="entry-content" style="line-height: 1.85; color: rgba(8,61,119,0.9); font-size: 1.05rem;">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
