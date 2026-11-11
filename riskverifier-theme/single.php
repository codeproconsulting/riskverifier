<?php
/**
 * The template for displaying all single posts
 *
 * @package RiskVerifier
 */

get_header();
?>

<main>
  <!-- Vector Header Banner -->
  <section class="vector-header-banner" aria-label="Page Header">
    <!-- SVG Dynamic 3D Wave Layers -->
    <div class="wave-banner-backdrop" aria-hidden="true">
      <svg viewBox="0 0 1440 220" preserveAspectRatio="none" class="wave-banner-svg" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="waveNavy" x1="0%" y1="0%" x2="100%" y2="80%">
            <stop offset="0%" stop-color="#05264b" />
            <stop offset="50%" stop-color="#083d77" />
            <stop offset="100%" stop-color="#0c4a8a" />
          </linearGradient>
          <linearGradient id="waveCyan" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#00e5ff" />
            <stop offset="45%" stop-color="#0284c7" />
            <stop offset="100%" stop-color="#0369a1" />
          </linearGradient>
          <linearGradient id="waveAzure" x1="0%" y1="0%" x2="100%" y2="50%">
            <stop offset="0%" stop-color="#e0f2fe" stop-opacity="0.8" />
            <stop offset="50%" stop-color="#bae6fd" stop-opacity="0.7" />
            <stop offset="100%" stop-color="#38bdf8" stop-opacity="0.5" />
          </linearGradient>
          <filter id="waveShadowL1" x="-10%" y="-10%" width="120%" height="140%">
            <feDropShadow dx="-3" dy="6" stdDeviation="8" flood-color="#05264b" flood-opacity="0.25" />
          </filter>
        </defs>
        <rect width="1440" height="220" fill="#f8fafc" />
        <path d="M 0 220 Q 320 200 540 160 T 1100 70 Q 1280 35 1440 15 L 1440 220 Z" fill="url(#waveAzure)" />
        <path d="M -20 220 C 180 220 370 186 580 141 C 810 92 1050 50 1460 18 L 1460 220 Z" fill="url(#waveCyan)" />
        <path d="M 460 220 C 680 210 850 146 1050 94 C 1230 48 1360 24 1460 10 L 1460 220 Z" fill="url(#waveNavy)" />
      </svg>
    </div>

    <div class="container wave-banner-container">
      <div class="wave-banner-left">
        <div class="wave-banner-kicker">
          <span class="kicker-brand-name">RISK VERIFIER</span>
          <span class="kicker-sep">•</span>
          <span class="kicker-desc">INTELLIGENCE &amp; REGULATORY INSIGHTS</span>
        </div>

        <div class="wave-ribbon-title-wrap">
          <h1 class="wave-ribbon-title">
            <span class="ribbon-text">EXPERT PERSPECTIVE</span>
            <span class="ribbon-stripes" aria-hidden="true">
              <i></i><i></i><i></i>
            </span>
          </h1>
        </div>

        <div class="wave-breadcrumb-pill">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
          <span class="sep">/</span>
          <span class="current">Article Details</span>
        </div>
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
