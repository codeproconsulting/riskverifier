<?php
/**
 * Template Name: Services Page
 *
 * @package RiskVerifier
 */

get_header();
?>
  <main>
    <!-- Page Header -->
    <section class="section section-blue-tint" style="padding: 60px 0;">
      <div class="container text-center" style="text-align: center;">
        <div class="badge badge-blue">Comprehensive 12-Service Suite</div>
        <h1 class="section-title">Professional Verification & Risk Solutions</h1>
        <p class="section-subtitle" style="max-width: 750px; margin: 0 auto;">
          Whether onboarding key executives, verifying offshore suppliers, or mitigating fraud, our verified intelligence empowers confident, legally compliant decisions.
        </p>
      </div>
    </section>

    <!-- Detailed Services List -->
    <section class="section section-white">
      <div class="container">
        <!-- Filter Tabs -->
        <div class="service-tabs-wrapper">
          <div class="service-tabs">
            <button class="service-tab-btn active" data-filter="all">All 12 Services</button>
            <button class="service-tab-btn" data-filter="legal">Criminal & Legal</button>
            <button class="service-tab-btn" data-filter="financial">Financial & Property</button>
            <button class="service-tab-btn" data-filter="identity">Identity & Credentials</button>
            <button class="service-tab-btn" data-filter="advisory">Due Diligence & Advisory</button>
          </div>
        </div>

        <div class="services-grid" id="servicesGrid">
          
          <!-- 1. Criminal Records Check -->
          <article class="service-card" data-category="legal">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
              </div>
              <span class="service-turnaround">24–72 Hours</span>
            </div>
            <h3 class="service-card-title">Criminal Records Check</h3>
            <p class="service-card-desc">
              Conduct comprehensive criminal background checks across multiple jurisdictions to ensure safe hiring, employee compliance, and risk mitigation.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Police & Court record searches
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Clearance certificate authentication
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('criminal-records')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 2. Civil Records Search -->
          <article class="service-card" data-category="legal">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
              </div>
              <span class="service-turnaround">24–48 Hours</span>
            </div>
            <h3 class="service-card-title">Civil Records Search</h3>
            <p class="service-card-desc">
              Access civil litigation records, court filings, bankruptcies, and commercial disputes to identify liabilities associated with individuals or firms.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Contract disputes & civil filings
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Judgments and liens index search
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('civil-records')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 3. Credit & Finance Reports -->
          <article class="service-card" data-category="financial">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
              </div>
              <span class="service-turnaround">24–48 Hours</span>
            </div>
            <h3 class="service-card-title">Credit & Finance Reports</h3>
            <p class="service-card-desc">
              Gain deep insights into financial behavior with individual and business credit reporting to evaluate fiscal stability and fraud exposure.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Credit ratings & default histories
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Corporate debt & liquidity profiles
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('credit-finance')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 4. Vital Records Verification -->
          <article class="service-card" data-category="identity">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path></svg>
              </div>
              <span class="service-turnaround">2–5 Days</span>
            </div>
            <h3 class="service-card-title">Vital Records Verification</h3>
            <p class="service-card-desc">
              Verify essential registry documents such as birth, marital status, and death records for identity confirmation and legal compliance.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Official civil registry confirmation
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Apostille & authentic stamp checks
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('vital-records')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 5. Identity & Credentials -->
          <article class="service-card" data-category="identity">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
              </div>
              <span class="service-turnaround">24–48 Hours</span>
            </div>
            <h3 class="service-card-title">Identity & Credentials</h3>
            <p class="service-card-desc">
              Authenticate national IDs, passports, academic degrees, and professional licenses directly with issuing bodies to eliminate fraud.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Degree & university registry checks
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Professional regulatory licenses
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('identity-credentials')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 6. Property & Asset Searches -->
          <article class="service-card" data-category="financial">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
              </div>
              <span class="service-turnaround">2–4 Days</span>
            </div>
            <h3 class="service-card-title">Property & Asset Searches</h3>
            <p class="service-card-desc">
              Identify real estate ownership, corporate assets, and deeds to assess financial capability, recovery options, and hidden liabilities.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Cadastral & land registry searches
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Encumbrance and mortgage verification
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('property-asset')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 7. Driving & MVR Records -->
          <article class="service-card" data-category="identity">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
              </div>
              <span class="service-turnaround">24–48 Hours</span>
            </div>
            <h3 class="service-card-title">Driving & MVR Records</h3>
            <p class="service-card-desc">
              Verify driving history, license status, suspensions, and moving violations to maintain fleet safety and employee compliance.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Official DMV license status pull
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Violations & suspension history
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('driving-records')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 8. Verifications & References -->
          <article class="service-card" data-category="identity">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
              </div>
              <span class="service-turnaround">2–4 Days</span>
            </div>
            <h3 class="service-card-title">Verifications & References</h3>
            <p class="service-card-desc">
              Structured verification of past employment history, job titles, responsibilities, supervisor reference interviews, and rehire eligibility.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Direct past employer HR validation
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Supervisor telephone interviews
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('verifications-references')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 9. Due Diligence -->
          <article class="service-card" data-category="advisory">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
              </div>
              <span class="service-turnaround">3–5 Days</span>
            </div>
            <h3 class="service-card-title">Due Diligence</h3>
            <p class="service-card-desc">
              Analyze reputational risks through international media searches, sanctions lists, and adverse information to support business transactions.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Global PEP & sanctions lists
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Ultimate Beneficial Ownership (UBO)
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('due-diligence')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 10. Media Analytics -->
          <article class="service-card" data-category="advisory">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              </div>
              <span class="service-turnaround">2–4 Days</span>
            </div>
            <h3 class="service-card-title">Media Analytics</h3>
            <p class="service-card-desc">
              Monitor, analyze, and understand media coverage across digital and traditional platforms to detect adverse publicity and protect brand equity.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Adverse press & digital sentiment
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Executive reputational exposure
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('media-analytics')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 11. Bespoke Research -->
          <article class="service-card" data-category="advisory">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </div>
              <span class="service-turnaround">Tailored</span>
            </div>
            <h3 class="service-card-title">Bespoke Research</h3>
            <p class="service-card-desc">
              Tailored, in-depth intelligence research designed around specific corporate M&A transactions, executive vetting, and unique needs.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Open-source intelligence (OSINT)
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Custom investigative deliverables
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('bespoke-research')">View Full Details &rarr;</button>
            </div>
          </article>

          <!-- 12. Geopolitical Advisory -->
          <article class="service-card" data-category="advisory">
            <div class="service-card-top">
              <div class="service-icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
              </div>
              <span class="service-turnaround">Continuous</span>
            </div>
            <h3 class="service-card-title">Geopolitical Advisory</h3>
            <p class="service-card-desc">
              Understand and navigate complex international environments, sovereign risk, policy shifts, and political dynamics in emerging markets.
            </p>
            <ul class="service-features-list">
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Sovereign and regulatory risk index
              </li>
              <li class="service-feature-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Cross-border operational insights
              </li>
            </ul>
            <div class="service-card-footer">
              <button class="service-link-btn" onclick="openServiceModal('geopolitical-advisory')">View Full Details &rarr;</button>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- Bottom CTA Bar -->
    <section class="section section-blue-tint" style="padding: 60px 0; text-align: center;">
      <div class="container">
        <h2 style="font-size: 2rem; font-weight: 800; color: #083d77; margin-bottom: 12px;">Need a Tailored Background Screening Solution?</h2>
        <p style="color: rgba(8,61,119,0.8); margin-bottom: 24px;">Our compliance consultants are ready to tailor custom SLA packages for your business.</p>
        <a href="contact.html" class="btn btn-primary btn-lg">Contact Our Verification Specialists</a>
      </div>
    </section>
  </main>

<?php
get_footer();
