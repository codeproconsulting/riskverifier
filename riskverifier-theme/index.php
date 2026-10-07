<?php
/**
 * The main template file
 *
 * @package RiskVerifier
 */

get_header();
?>

<main class="section section-white">
  <div class="container">
    <header class="section-header">
      <h1 class="section-title"><?php single_post_title(); ?></h1>
    </header>

    <div style="max-width: 860px; margin: 0 auto; line-height: 1.8;">
      <?php
      if (have_posts()) :
          while (have_posts()) :
              the_post();
              ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid rgba(8,61,119,0.15);">
                <h2 style="font-size: 1.75rem; margin-bottom: 12px;">
                  <a href="<?php the_permalink(); ?>" style="color: #083d77; text-decoration: none;"><?php the_title(); ?></a>
                </h2>
                <div style="color: rgba(8,61,119,0.6); font-size: 0.875rem; margin-bottom: 16px;">
                  Published on <?php echo get_the_date(); ?>
                </div>
                <div style="color: rgba(8,61,119,0.85); font-size: 1rem;">
                  <?php the_excerpt(); ?>
                </div>
                <div style="margin-top: 16px;">
                  <a href="<?php the_permalink(); ?>" class="btn btn-outline btn-sm">Read More &rarr;</a>
                </div>
              </article>
              <?php
          endwhile;

          the_posts_navigation();
      else :
          ?>
          <p>No content found.</p>
          <?php
      endif;
      ?>
    </div>
  </div>
</main>

<?php
get_footer();
