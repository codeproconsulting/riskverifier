<?php
/**
 * Template Name: Blog Page
 *
 * @package RiskVerifier
 */

get_header();
?>

<main>
  <!-- Vector Header Banner (Reference Match Wave Layout) -->
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
          <filter id="waveShadowL2" x="-10%" y="-10%" width="120%" height="140%">
            <feDropShadow dx="-2" dy="5" stdDeviation="6" flood-color="#0284c7" flood-opacity="0.20" />
          </filter>
        </defs>

        <rect width="1440" height="220" fill="#f8fafc" />

        <pattern id="bannerGrid" width="24" height="24" patternUnits="userSpaceOnUse">
          <path d="M 24 0 L 0 0 0 24" fill="none" stroke="rgba(8,61,119,0.03)" stroke-width="1"/>
        </pattern>
        <rect width="1440" height="220" fill="url(#bannerGrid)" />

        <!-- Layer 1 -->
        <path d="M 0 220 Q 320 200 540 160 T 1100 70 Q 1280 35 1440 15 L 1440 220 Z" fill="url(#waveAzure)" />
        <!-- Layer 2 -->
        <path d="M -20 220 C 180 220 380 180 590 135 C 820 85 1060 42 1460 10 L 1460 220 Z" fill="#ffffff" filter="url(#waveShadowL2)" />
        <!-- Layer 3 -->
        <path d="M -20 220 C 180 220 370 186 580 141 C 810 92 1050 50 1460 18 L 1460 220 Z" fill="url(#waveCyan)" />
        <!-- Layer 4 -->
        <path d="M 440 220 C 660 210 840 142 1040 90 C 1220 44 1350 20 1460 6 L 1460 220 Z" fill="#ffffff" filter="url(#waveShadowL1)" />
        <!-- Layer 5 -->
        <path d="M 460 220 C 680 210 850 146 1050 94 C 1230 48 1360 24 1460 10 L 1460 220 Z" fill="url(#waveNavy)" />
        <circle cx="1280" cy="100" r="130" fill="#00e5ff" opacity="0.08" />
      </svg>
    </div>

    <div class="container wave-banner-container">
      <div class="wave-banner-left">
        <div class="wave-banner-kicker">
          <span class="kicker-brand-name">RISK VERIFIER</span>
          <span class="kicker-sep">•</span>
          <span class="kicker-desc">INSIGHTS, ADVISORY &amp; COMPLIANCE INTELLIGENCE</span>
        </div>

        <div class="wave-ribbon-title-wrap">
          <h1 class="wave-ribbon-title">
            <span class="ribbon-text">BLOG &amp; INSIGHTS</span>
            <span class="ribbon-stripes" aria-hidden="true">
              <i></i><i></i><i></i>
            </span>
          </h1>
        </div>

        <div class="wave-breadcrumb-pill">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">Blog &amp; Knowledge Hub</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Blog Section -->
  <section class="section section-white" style="padding: 70px 0 90px;">
    <div class="container">

      <div style="text-align: center; max-width: 680px; margin: 0 auto 50px;">
        <span style="font-size:0.82rem; font-weight:800; letter-spacing:0.12em; text-transform:uppercase; color:#0284c7; display:block; margin-bottom:8px;">KNOWLEDGE HUB</span>
        <h2 style="font-size:clamp(1.9rem, 2.8vw, 2.45rem); font-weight:800; color:#083d77; margin:0 0 14px; font-family:'Plus Jakarta Sans', var(--font-main), sans-serif; line-height:1.2;">
          Industry Perspectives &amp; Regulatory Intelligence
        </h2>
        <p style="font-size:1.02rem; color:#475569; line-height:1.65; margin:0;">
          Expert guidance on international employment screening, direct-source record verification, and navigating cross-border corporate compliance across 100+ jurisdictions.
        </p>
      </div>

      <div class="home-blog-grid">
        <?php
        $fallback_articles = array(
            array(
                'slug'    => 'global-background-checks-fcra-gdpr',
                'title'   => 'Global Background Checks: Navigating FCRA &amp; GDPR in Cross-Border Hiring',
                'date'    => 'October 24, 2026',
                'read'    => '5 min read',
                'img'     => get_template_directory_uri() . '/assets/blog-global-compliance.jpg',
                'excerpt' => 'Discover how multinational organizations navigate conflicting data privacy frameworks while conducting legally sound background verifications across international boundaries.'
            ),
            array(
                'slug'    => 'why-database-scrapes-fail-court-docket-verification',
                'title'   => 'Why Database Scrapes Fail: The Vital Need for Direct-Source Court Docket Verification',
                'date'    => 'October 15, 2026',
                'read'    => '6 min read',
                'img'     => get_template_directory_uri() . '/assets/blog-court-dockets.jpg',
                'excerpt' => 'Automated scraping algorithms routinely miss expunged cases, seal orders, and localized jurisdiction dockets. Learn why evidential certainty requires primary-source verification.'
            ),
            array(
                'slug'    => 'mitigating-executive-onboarding-risks',
                'title'   => 'Mitigating Executive Onboarding Risks: Beyond Standard Criminal Records',
                'date'    => 'October 02, 2026',
                'read'    => '4 min read',
                'img'     => get_template_directory_uri() . '/assets/blog-executive-risks.jpg',
                'excerpt' => 'C-suite and sensitive governance roles demand multi-layered investigation including corporate affiliations, regulatory sanctions, civil litigation histories, and conflict audits.'
            )
        );

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $blog_query = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'paged'          => $paged,
            'post_status'    => 'publish'
        ));

        $rendered_count = 0;
        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
                if (get_post_field('post_name', get_the_ID()) === 'hello-world') {
                    continue;
                }
                $categories = get_the_category();
                $cat_name = !empty($categories) ? esc_html($categories[0]->name) : 'Intelligence';
                $default_img = isset($fallback_articles[$rendered_count % 3]['img']) ? $fallback_articles[$rendered_count % 3]['img'] : get_template_directory_uri() . '/assets/blog-global-compliance.jpg';
                $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : $default_img;
                $rendered_count++;
                ?>
                <article class="blog-card">
                  <a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit; display:flex; flex-direction:column; height:100%;">
                    <div class="blog-card-media">
                      <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                      <div class="blog-card-meta">
                        <span>📅 <?php echo get_the_date('F d, Y'); ?></span>
                        <span>⏱ <?php echo ceil(max(1, str_word_count(strip_tags(get_the_content())) / 200)) . ' min read'; ?></span>
                      </div>
                      <h3 class="blog-card-heading"><?php the_title(); ?></h3>
                      <p class="blog-card-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 22, '...'); ?>
                      </p>
                      <div class="blog-card-footer">
                        <span class="blog-read-more-btn">Read More &rarr;</span>
                      </div>
                    </div>
                  </a>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        endif;

        // If fewer than 3 posts rendered, pad with the 3 fallback cards so all 3 boxes ALWAYS appear
        if ($rendered_count < 3) :
            for ($i = $rendered_count; $i < 3; $i++) :
                $fb = $fallback_articles[$i];
                $post_obj = get_page_by_path($fb['slug'], OBJECT, 'post');
                $link = $post_obj ? get_permalink($post_obj) : '#';
                ?>
                <article class="blog-card">
                  <a href="<?php echo esc_url($link); ?>" style="text-decoration:none; color:inherit; display:flex; flex-direction:column; height:100%;">
                    <div class="blog-card-media">
                      <img src="<?php echo esc_url($fb['img']); ?>" alt="<?php echo esc_attr(strip_tags($fb['title'])); ?>" class="blog-card-img" loading="lazy">
                    </div>
                    <div class="blog-card-body">
                      <div class="blog-card-meta">
                        <span>📅 <?php echo esc_html($fb['date']); ?></span>
                        <span>⏱ <?php echo esc_html($fb['read']); ?></span>
                      </div>
                      <h3 class="blog-card-heading"><?php echo $fb['title']; ?></h3>
                      <p class="blog-card-excerpt"><?php echo esc_html($fb['excerpt']); ?></p>
                      <div class="blog-card-footer">
                        <span class="blog-read-more-btn">Read More &rarr;</span>
                      </div>
                    </div>
                  </a>
                </article>
                <?php
            endfor;
        endif;
        ?>
      </div>

    </div>
  </section>

  <!-- Consultation Banner -->
  <section class="section" style="background: linear-gradient(135deg, #05264b 0%, #083d77 100%); padding: 60px 0; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 780px;">
      <h2 style="color: #ffffff; font-size: 2.1rem; font-weight: 800; margin-bottom: 14px; font-family: 'Plus Jakarta Sans', var(--font-main), sans-serif;">
        Need a Custom Screening Advisory for Your Enterprise?
      </h2>
      <p style="color: #bae6fd; font-size: 1.05rem; line-height: 1.6; margin-bottom: 28px;">
        Speak directly with our regional desk analysts in Texas, Ottawa, Reading, or Islamabad to tailor a verification protocol for your jurisdiction.
      </p>
      <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
        <a href="<?php echo esc_url(home_url('/request-verification/')); ?>" class="btn btn-primary" style="background:#0284c7; border-color:#0284c7;">Request Verification Package &rarr;</a>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-outline" style="border-color:#ffffff; color:#ffffff;">Contact Our Specialists</a>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();

