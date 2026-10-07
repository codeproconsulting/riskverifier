<?php
/**
 * Template Name: Contact Page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <section class="section section-blue-tint" style="padding: 60px 0;">
      <div class="container text-center" style="text-align: center;">
        <div class="badge badge-blue">Global Communication Channels</div>
        <h1 class="section-title">Connect with Risk Verifier</h1>
        <p class="section-subtitle" style="max-width: 700px; margin: 0 auto;">
          If you have any inquiries regarding our services, please contact us through this form or reach out directly to our regional desks.
        </p>
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
