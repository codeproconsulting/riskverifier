<?php
/**
 * The template for displaying the footer
 *
 * @package RiskVerifier
 */
?>
  <!-- Interactive Service Details Modal -->
  <div class="modal-overlay" id="serviceModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-container">
      <div class="modal-header">
        <h3 class="modal-title" id="modalTitle">Service Details</h3>
        <button class="modal-close" id="modalClose" aria-label="Close modal">&times;</button>
      </div>
      <div class="modal-body">
        <p id="modalDesc"></p>
        <h4 style="font-size:1rem; font-weight:700; color:#083d77; margin-bottom:12px;">Key Verification Highlights:</h4>
        <ul class="modal-bullets" id="modalBullets"></ul>
      </div>
      <div class="modal-footer">
        <span id="modalTurnaround" style="font-size:0.875rem; font-weight:700; color:#083d77;"></span>
        <button class="btn btn-primary btn-sm" id="modalSelectBtn">Select in Quote Form</button>
      </div>
    </div>
  </div>

  <!-- Corporate Footer -->
  <footer class="site-footer">
    <div class="container footer-grid">
      <!-- Col 1: Brand -->
      <div class="footer-brand">
        <div class="footer-logo-wrap">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Logo.svg'); ?>" alt="Risk Verifier" class="brand-logo-img">
        </div>
        <p>
          Delivering accurate information, reducing risk, and building trust. Professional background checks, corporate due diligence, and geopolitical advisory across 100+ countries.
        </p>
        <div style="font-size:0.85rem; color:#ffffff;">
          <strong>Global Offices:</strong> Texas • Ottawa • Reading (UK) • Islamabad
        </div>
      </div>

      <!-- Col 2: Services -->
      <div>
        <h4 class="footer-title">Screening Services</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Criminal Records Check</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Civil Records Search</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Credit & Finance Reports</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Identity & Credentials</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Property & Asset Searches</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Driving & MVR Records</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Due Diligence & Sanctions</a></li>
        </ul>
      </div>

      <!-- Col 3: Company -->
      <div>
        <h4 class="footer-title">Company & Process</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Risk Verifier</a></li>
          <li><a href="<?php echo esc_url(home_url('/how-it-works/')); ?>">How It Works (5 Steps)</a></li>
          <li><a href="<?php echo esc_url(home_url('/#offices')); ?>">Regional Offices</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/#quote-form-section')); ?>">Request Verification</a></li>
        </ul>
      </div>

      <!-- Col 4: Regional Contacts -->
      <div>
        <h4 class="footer-title">Regional Desks</h4>
        <div class="footer-offices-list">
          <div class="footer-office-item">
            <strong>USA (Texas):</strong>
            <a href="tel:+13862431035">+1 (386) 243-1035</a>
          </div>
          <div class="footer-office-item">
            <strong>Canada (Ottawa):</strong>
            <a href="tel:+14168221904">+1 (416) 822-1904</a>
          </div>
          <div class="footer-office-item">
            <strong>UK (Reading):</strong>
            <a href="tel:+447973499517">+44 7973 499517</a>
          </div>
          <div class="footer-office-item">
            <strong>Pakistan (Islamabad):</strong>
            <a href="tel:+923005555884">+92 300 5555884</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-bottom">
      <div>
        © <?php echo date('Y'); ?> Risk Verifier. All Rights Reserved. Business Confidence Starts with Risk Verification.
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
