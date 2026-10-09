<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main class="error-404-main" style="min-height: 60vh; display: flex; align-items: center; justify-content: center; padding: 80px 20px; background: #f8fafc;">
    <div class="container" style="max-width: 680px; text-align: center;">
      <div style="font-size: 5rem; font-weight: 800; color: #083d77; line-height: 1; margin-bottom: 16px;">404</div>
      <h1 style="font-size: 2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Page Not Found</h1>
      <p style="font-size: 1.1rem; color: #475569; margin-bottom: 32px; line-height: 1.6;">
        The requested page could not be located. You can explore our screening services or return to the homepage below.
      </p>
      <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-md">
          Return to Homepage
        </a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-outline btn-md">
          Explore Services
        </a>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-outline btn-md">
          Contact Support
        </a>
      </div>
    </div>
  </main>
<?php
get_footer();
