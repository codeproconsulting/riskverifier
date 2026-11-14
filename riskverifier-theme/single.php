<?php
/**
 * The template for displaying all single posts
 *
 * @package RiskVerifier
 */

get_header();
?>

<main>
<!-- Page Header Banner (Navy Blue with Gold Rings & Accent Bar) -->
    <section class="vector-header-banner page-header-banner" aria-label="Page Header">
      <div class="banner-gold-rings" aria-hidden="true">
        <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg" class="banner-gold-rings-svg">
          <circle cx="480" cy="250" r="140" stroke="#D88F06" stroke-width="2" stroke-opacity="0.9" />
          <circle cx="480" cy="250" r="210" stroke="#D88F06" stroke-width="2" stroke-opacity="0.9" />
          <circle cx="480" cy="250" r="280" stroke="#D88F06" stroke-width="2" stroke-opacity="0.9" />
          <circle cx="480" cy="250" r="350" stroke="#D88F06" stroke-width="1.5" stroke-opacity="0.5" />
        </svg>
      </div>

      <div class="container banner-inner-container">
        <div class="banner-title-row">
          <span class="banner-gold-bar" aria-hidden="true"></span>
          <h1 class="page-banner-title">
            <span class="ribbon-text"><?php the_title(); ?></span>
          </h1>
        </div>
        <div class="banner-breadcrumbs">
          <a href="<?php echo home_url('/'); ?>">Home</a> <span class="sep">/</span> <a href="<?php echo home_url('/blog'); ?>">Blog</a> <span class="sep">/</span> <span class="current"><?php the_title(); ?></span>
        </div>
      </div>
    </section>

  <!-- Article Details Content -->
  <section class="blog-single-content-wrap">
    <div class="container">
      <div class="blog-single-grid">
        
        <?php
        while (have_posts()) :
            the_post();
            $categories = get_the_category();
            $cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'Risk Intelligence';
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div style="margin-bottom: 24px;">
                <span class="blog-single-category"><?php echo $cat_name; ?></span>
                <h1 class="blog-single-title"><?php the_title(); ?></h1>
                <div class="blog-single-meta">
                  <span class="blog-single-meta-item">📅 <?php echo get_the_date('F d, Y'); ?></span>
                  <span class="blog-single-meta-item">✍️ <?php the_author(); ?></span>
                  <span class="blog-single-meta-item">⏱ <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200) . ' min read'; ?></span>
                  <span class="blog-single-meta-item">🌐 100+ Jurisdictions</span>
                </div>
              </div>

              <?php if (has_post_thumbnail()) : ?>
                <div class="blog-featured-media">
                  <?php the_post_thumbnail('full'); ?>
                </div>
              <?php else :
                $post_slug = get_post_field('post_name', get_the_ID());
                $post_title = strtolower(get_the_title());
                $fallback_img = 'blog-global-compliance.jpg';
                if (strpos($post_slug, 'docket') !== false || strpos($post_slug, 'scrape') !== false || strpos($post_title, 'docket') !== false || strpos($post_title, 'scrape') !== false || strpos($post_title, 'court') !== false) {
                    $fallback_img = 'blog-court-dockets.jpg';
                } elseif (strpos($post_slug, 'executive') !== false || strpos($post_slug, 'onboarding') !== false || strpos($post_title, 'executive') !== false || strpos($post_title, 'onboarding') !== false) {
                    $fallback_img = 'blog-executive-risks.jpg';
                }
              ?>
                <div class="blog-featured-media">
                  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/' . $fallback_img); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%; border-radius:12px; max-height:420px; object-fit:cover;">
                </div>
              <?php endif; ?>

              <div class="blog-article-body">
                <?php the_content(); ?>
              </div>

              <div style="margin-top: 45px; padding: 28px; background: #f8fafc; border-radius: 12px; border: 1px solid rgba(8,61,119,0.1); display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
                <div>
                  <strong style="color:#083d77; display:block; font-size:1.1rem; margin-bottom:4px;">Need custom screening protocols for your organization?</strong>
                  <span style="color:#64748b; font-size:0.92rem;">Consult directly with our regional legal intelligence team.</span>
                </div>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary btn-sm">Speak With Our Specialists &rarr;</a>
              </div>
            </article>
            <?php
        endwhile;
        ?>

        <!-- Sidebar -->
        <aside class="blog-sidebar">
          <!-- CTA Card -->
          <div class="blog-cta-widget">
            <h3 class="blog-cta-title">Order Verification Package</h3>
            <p class="blog-cta-text">
              Customized direct-source intelligence packages for multinational businesses across 100+ countries.
            </p>
            <a href="<?php echo esc_url(home_url('/request-verification/')); ?>" class="btn btn-primary" style="background:#00e5ff; color:#05264b; font-weight:800; border:none; width:100%;">
              Get Started Now &rarr;
            </a>
          </div>

          <!-- Recent Articles -->
          <div class="blog-sidebar-widget">
            <h4 class="blog-widget-title">Recent Intelligence</h4>
            <ul class="blog-recent-list">
              <?php
              $recent_posts = wp_get_recent_posts(array(
                  'numberposts' => 4,
                  'post_status' => 'publish'
              ));
              if (!empty($recent_posts)) :
                  foreach ($recent_posts as $p) :
                      ?>
                      <li class="blog-recent-item">
                        <a href="<?php echo get_permalink($p['ID']); ?>" class="blog-recent-link"><?php echo esc_html($p['post_title']); ?></a>
                        <span class="blog-recent-date"><?php echo get_the_date('F d, Y', $p['ID']); ?></span>
                      </li>
                      <?php
                  endforeach;
                  wp_reset_query();
              else :
                  ?>
                  <li class="blog-recent-item">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="blog-recent-link">Explore Direct-Source Verification Protocols</a>
                  </li>
                  <?php
              endif;
              ?>
            </ul>
          </div>

          <!-- Coverage Desks -->
          <div class="blog-sidebar-widget">
            <h4 class="blog-widget-title">Coverage Desks</h4>
            <div style="display:flex; flex-direction:column; gap:10px; font-size:0.9rem; color:#083d77; font-weight:700;">
              <div>🇺🇸 North America (USA &amp; Canada)</div>
              <div>🇬🇧 United Kingdom &amp; Europe</div>
              <div>🇵🇰 Asia-Pacific &amp; South Asia</div>
              <div>🌍 Middle East &amp; Global Desks</div>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </section>
</main>

<?php
get_footer();
