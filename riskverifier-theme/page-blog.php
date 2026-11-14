<?php
/**
 * Template Name: Blog Page
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
            <span class="ribbon-text">BLOG & INSIGHTS</span>
          </h1>
        </div>
        <div class="banner-breadcrumbs">
          <a href="<?php echo home_url('/'); ?>">Home</a> <span class="sep">/</span> <span class="current">Blog</span>
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

