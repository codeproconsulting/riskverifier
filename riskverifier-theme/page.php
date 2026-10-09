<?php
/**
 * The template for displaying all pages
 *
 * Elementor-compatible: respects full-width and canvas page layouts.
 * When Elementor controls a page, the_content() outputs the Elementor
 * builder content — no custom wrappers needed.
 *
 * @package RiskVerifier
 */

// Detect Elementor page layout
$elementor_page_layout = '';
if (function_exists('get_post_meta') && is_singular()) {
    $elementor_page_layout = get_post_meta(get_the_ID(), '_elementor_template_type', true);
    $page_layout = get_post_meta(get_the_ID(), '_wp_page_template', true);
}

// "elementor_canvas" = no header, no footer, pure canvas
if (isset($page_layout) && $page_layout === 'elementor_canvas') {
    while (have_posts()) {
        the_post();
        the_content();
    }
    return;
}

// "elementor_full_width" = just skip sidebar/container constraints
$is_elementor_full_width = (isset($page_layout) && $page_layout === 'elementor_full_width')
    || (defined('ELEMENTOR_VERSION') && \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_ID()));

get_header();
?>

<?php if ($is_elementor_full_width): ?>
  <!-- Elementor full-width: no container wrapper, output directly -->
  <main id="main-content">
    <?php
    while (have_posts()) {
        the_post();
        the_content();
    }
    ?>
  </main>

<?php else: ?>
  <!-- Standard page template with content area -->
  <main class="section section-white">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 60px 20px;">
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
<?php endif; ?>

<?php
get_footer();

