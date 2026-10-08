<?php
/**
 * Template Name: Contact Page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <!-- Vector Header Banner -->
    <section class="vector-header-banner">
      <!-- Left Vector Wing -->
      <div class="banner-vector-left" aria-hidden="true">
        <svg viewBox="0 0 340 160" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cyanGradL" x1="0%" y1="0%" x2="100%" y2="80%">
              <stop offset="0%" stop-color="#00e5ff" />
              <stop offset="50%" stop-color="#00b4d8" />
              <stop offset="100%" stop-color="#0077b6" />
            </linearGradient>
            <linearGradient id="navyGradL" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#05264b" />
              <stop offset="100%" stop-color="#083d77" />
            </linearGradient>
            <filter id="vectorDropShadowL" x="-30%" y="-30%" width="160%" height="160%">
              <feDropShadow dx="5" dy="4" stdDeviation="6" flood-color="#05264b" flood-opacity="0.35" />
            </filter>
            <filter id="bevelShadowL" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="2" dy="2" stdDeviation="3" flood-color="#000000" flood-opacity="0.18" />
            </filter>
          </defs>
          <path d="M 0 28 L 95 38 L 155 160 L 0 160 Z" fill="url(#navyGradL)" />
          <path d="M 70 0 L 105 0 L 132 46 L 95 38 Z" fill="#e2e8f0" filter="url(#bevelShadowL)" />
          <path d="M 0 0 L 85 0 L 132 46 L 180 160 L 155 160 L 95 38 L 0 28 Z" fill="url(#cyanGradL)" filter="url(#vectorDropShadowL)" />
        </svg>
      </div>

      <!-- Center Text Content -->
      <div class="banner-content-box">
        <span class="banner-tagline">GLOBAL DESKS &amp; REGIONAL HUBS</span>
        <h1 class="banner-title">CONTACT US</h1>
        <div class="banner-breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
          <span class="sep">/</span>
          <span class="current">Contact Us</span>
        </div>
      </div>

      <!-- Right Vector Wing -->
      <div class="banner-vector-right" aria-hidden="true">
        <svg viewBox="0 0 340 160" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="cyanGradR" x1="0%" y1="0%" x2="100%" y2="80%">
              <stop offset="0%" stop-color="#00e5ff" />
              <stop offset="50%" stop-color="#00b4d8" />
              <stop offset="100%" stop-color="#0077b6" />
            </linearGradient>
            <linearGradient id="navyGradR" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#05264b" />
              <stop offset="100%" stop-color="#083d77" />
            </linearGradient>
            <filter id="vectorDropShadowR" x="-30%" y="-30%" width="160%" height="160%">
              <feDropShadow dx="5" dy="4" stdDeviation="6" flood-color="#05264b" flood-opacity="0.35" />
            </filter>
            <filter id="bevelShadowR" x="-20%" y="-20%" width="140%" height="140%">
              <feDropShadow dx="2" dy="2" stdDeviation="3" flood-color="#000000" flood-opacity="0.18" />
            </filter>
          </defs>
          <path d="M 0 28 L 95 38 L 155 160 L 0 160 Z" fill="url(#navyGradR)" />
          <path d="M 70 0 L 105 0 L 132 46 L 95 38 Z" fill="#e2e8f0" filter="url(#bevelShadowR)" />
          <path d="M 0 0 L 85 0 L 132 46 L 180 160 L 155 160 L 95 38 L 0 28 Z" fill="url(#cyanGradR)" filter="url(#vectorDropShadowR)" />
        </svg>
      </div>
    </section>

    <!-- Regional Offices Hub -->
    <section class="section section-white" id="offices-contact">
      <div class="container">
        <div class="offices-grid" style="margin-bottom: 60px;">
          <!-- USA -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇺🇸</div>
              <h3 class="office-region">United States</h3>
            </div>
            <p class="office-address">
              5900 Balcones Drive STE 33098<br>
              Austin, TX 78731, USA
            </p>
            <div class="office-contacts">
              <a href="tel:+13862431035" class="office-contact-link">📞 +1 (386) 243-1035</a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">✉️ info@riskverifier.com</a>
              <a href="https://wa.me/13862431035" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>

          <!-- Canada -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇨🇦</div>
              <h3 class="office-region">Canada</h3>
            </div>
            <p class="office-address">
              388 Hepatica Way<br>
              Orleans, ON, K4A 0Z1, Canada
            </p>
            <div class="office-contacts">
              <a href="tel:+14168221904" class="office-contact-link">📞 +1 (416) 822-1904</a>
              <a href="mailto:info.ca@riskverifier.com" class="office-contact-link">✉️ info.ca@riskverifier.com</a>
              <a href="https://wa.me/14168221904" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>

          <!-- UK -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇬🇧</div>
              <h3 class="office-region">United Kingdom</h3>
            </div>
            <p class="office-address">
              82 Ashampstead Road<br>
              Reading, Berkshire RG30 3LG, UK
            </p>
            <div class="office-contacts">
              <a href="tel:+447973499517" class="office-contact-link">📞 +44 7973 499517</a>
              <a href="mailto:info.uk@riskverifier.com" class="office-contact-link">✉️ info.uk@riskverifier.com</a>
              <a href="https://wa.me/447973499517" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>

          <!-- Pakistan -->
          <div class="office-card">
            <div class="office-card-top">
              <div class="office-flag">🇵🇰</div>
              <h3 class="office-region">Pakistan</h3>
            </div>
            <p class="office-address">
              F-16, First Floor, Galleria Mall<br>
              I-8 Markaz, Islamabad, Pakistan
            </p>
            <div class="office-contacts">
              <a href="tel:+923005555884" class="office-contact-link">📞 +92 300 5555884</a>
              <a href="mailto:info@riskverifier.com" class="office-contact-link">✉️ info@riskverifier.com</a>
              <a href="https://wa.me/923005555884" target="_blank" class="office-whatsapp-btn">Direct WhatsApp Desk</a>
            </div>
          </div>
        </div>

        <!-- Contact Form Box -->
        <div style="max-width: 800px; margin: 0 auto; background: #ffffff; border: 1.5px solid rgba(8,61,119,0.15); border-radius: 20px; padding: 40px; box-shadow: 0 10px 25px -5px rgba(8,61,119,0.06);">
          <h2 style="font-size: 1.8rem; font-weight: 800; color: #083d77; margin-bottom: 8px; text-align: center;">Leave a Message</h2>
          <p style="text-align: center; color: rgba(8,61,119,0.8); margin-bottom: 28px;">We are ready to assist you with background screening, pricing, and compliance inquiries.</p>

          <form id="generalContactForm" class="quote-form">
            <div class="form-row">
              <div class="form-group">
                <label for="contactFullName">Your Name *</label>
                <input type="text" id="contactFullName" class="form-input" required placeholder="Full Name">
              </div>
              <div class="form-group">
                <label for="contactEmail">Email Address *</label>
                <input type="email" id="contactEmail" class="form-input" required placeholder="email@company.com">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="contactPhone">Phone / WhatsApp</label>
                <input type="tel" id="contactPhone" class="form-input" placeholder="+1 ...">
              </div>
              <div class="form-group">
                <label for="contactOfficeSelect">Select Nearest Office</label>
                <select id="contactOfficeSelect" class="form-select">
                  <option value="USA">USA Office (Austin, Texas)</option>
                  <option value="Canada">Canada Office (Ottawa)</option>
                  <option value="UK">UK Office (Reading)</option>
                  <option value="Pakistan">Pakistan Office (Islamabad)</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="contactMessage">Inquiry Details *</label>
              <textarea id="contactMessage" class="form-textarea" required placeholder="Describe your verification needs..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 10px;">Send Message</button>
          </form>
          <div id="generalContactAlert" style="display: none; margin-top: 16px; padding: 16px; background: #ffffff; border: 2px solid #083d77; border-radius: 8px; color: #083d77; font-weight: 700; text-align: center;">
            ✓ Thank you! Your message has been received. Our team will contact you shortly.
          </div>
        </div>
      </div>
    </section>
  </main>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("generalContactForm");
  const alertBox = document.getElementById("generalContactAlert");
  if (form && alertBox) {
    form.addEventListener("submit", function(e) {
      e.preventDefault();
      alertBox.style.display = "block";
      form.reset();
    });
  }
});
</script>

<?php
get_footer();
