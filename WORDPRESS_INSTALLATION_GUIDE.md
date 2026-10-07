# Risk Verifier – WordPress Theme Installation & Setup Guide

This guide provides step-by-step instructions on how to upload and activate the newly redesigned **Risk Verifier** custom theme on your WordPress website (`riskverifier.com`) without touching any drag-and-drop page builders.

---

## 📦 What Has Been Built

1. **`riskverifier-theme.zip`** (Ready-to-upload WordPress Theme package)
   - Fully standalone, lightweight, ultra-fast custom theme.
   - Standard WordPress theme architecture (`style.css`, `functions.php`, `header.php`, `footer.php`, `front-page.php`, `index.php`, custom page templates, `assets/css/`, `assets/js/`, `screenshot.png`).
2. **`riskverifier-theme/`** (Unzipped theme directory for FTP / cPanel upload)
3. **Standalone Static HTML/CSS/JS preview** in the root workspace (`index.html`, `services.html`, `how-it-works.html`, `about.html`, `contact.html`) to preview or test instantly in any browser.

---

## 🚀 Method 1: Upload via WordPress Admin (Recommended – 2 Minutes)

This is the fastest and easiest method directly through your WordPress Dashboard:

### Step 1: Log in to WordPress Admin
1. Open your browser and navigate to:
   ```
   https://riskverifier.com/wp-admin
   ```
2. Log in with your Administrator credentials.

### Step 2: Navigate to Themes
1. In the left-hand admin sidebar, hover over **Appearance** and click **Themes**.
2. Click the **Add New Theme** (or **Add New**) button at the top of the page.
3. Click the **Upload Theme** button next to the page heading.

### Step 3: Upload the Theme ZIP
1. Click **Choose File** (or **Browse**).
2. Select the file:
   ```
   riskverifier-theme.zip
   ```
   *(Located in your workspace root: `/Users/fidaali/riskverifier/riskverifier-theme.zip`)*
3. Click **Install Now**.

### Step 4: Activate the Theme
1. WordPress will unpack the archive and verify the theme files.
2. Click the **Activate** link.
3. You will immediately see the sleek "Risk Verifier" theme with its custom preview screenshot active in your dashboard!

---

## 🌐 Method 2: Upload via cPanel File Manager or FTP (Alternative)

If you prefer uploading files directly to your server:

### Via cPanel:
1. Log in to your hosting cPanel.
2. Open **File Manager** and navigate to your WordPress installation directory:
   ```
   public_html/wp-content/themes/
   ```
3. Click **Upload** and upload `riskverifier-theme.zip`.
4. Right-click `riskverifier-theme.zip` and select **Extract**.
5. Log in to WordPress Admin > **Appearance** > **Themes**, and click **Activate** under **Risk Verifier**.

### Via FTP (FileZilla / Cyberduck):
1. Connect to your server via SFTP/FTP.
2. Navigate to `/wp-content/themes/`.
3. Upload the unzipped folder `riskverifier-theme/`.
4. Log in to WordPress Admin > **Appearance** > **Themes** > Click **Activate**.

---

## ⚙️ Post-Installation Configuration

### 1. Set the Front Page (Homepage)
If your WordPress installation does not automatically display the new custom front page:
1. Go to **Settings > Reading** in your WordPress Admin.
2. Under **Your homepage displays**, select **A static page**.
3. Set **Homepage** to your Home page (or create a blank page titled "Home").
4. Because the theme includes `front-page.php`, WordPress will automatically render the entire redesigned, interactive homepage with hero simulator, services grid, quote calculator, and regional offices.
5. Click **Save Changes**.

### 2. Configure Navigation Menu (Optional)
The theme comes with a responsive navigation bar and automatic fallbacks. If you want to use WordPress's native menu builder:
1. Go to **Appearance > Menus**.
2. Create or select your menu, add your pages (Home, Services, How It Works, About Us, Regional Offices, Contact).
3. Under **Menu Settings > Display location**, check **Primary Navigation Menu**.
4. Click **Save Menu**.

### 3. Assign Page Templates (For Inner Pages)
When editing or creating pages in **Pages > All Pages**:
- For the **About** page: Select Template **About Us Page** in the right sidebar under *Page Attributes / Template*.
- For the **Services** page: Select Template **Services Portfolio Page**.
- For the **How It Works** page: Select Template **How It Works Page**.
- For the **Contact** page: Select Template **Contact Us Page**.

---

## 🎨 Redesign Highlights & Improvements

1. **Aesthetic & Color Palette**:
   - Clean, crisp **White Background** (`#FFFFFF` & subtle `#F8FAFC`).
   - Sophisticated **Royal & Cobalt Blues** (`#0056D2`, `#0066FF`, `#EFF6FF`).
   - Deep Navy Typography (`#0A192F`) providing high readability and enterprise trust.
2. **Authentic Content Preserved (100%)**:
   - Eliminated all the dummy ThemeForest demo text ("Intrinsicly evisculate...", "Rapidiously leverage...", Latin placeholder blog posts).
   - Showcases all authentic **12 Services** with turnaround times and scopes.
   - Highlights the authentic **5-step screening process**.
   - Displays all 4 authentic **Regional Offices**:
     - **USA**: 5900 Balcones Drive STE 33098 Austin, TX 78731 (+1 386 243-1035)
     - **Canada**: 388 Hepatica Way Orleans, ON, K4A 0Z1 (+1 416 822-1904)
     - **UK**: 82 Ashampstead Road Reading, Berkshire RG30 3LG (+44 7973 499517)
     - **Pakistan**: F-16, First Floor, Galleria Mall, I-8 Markaz, Islamabad (+92 300 5555884)
3. **Interactive Features**:
   - **Live Screening Simulator**: Test-drive verified mock lookups directly in the hero section.
   - **Interactive Service Tabs & Modals**: Filter between Criminal & Legal, Financial, Identity, and Advisory services; click any service to view full verification details.
   - **Dynamic Quote Estimator**: Select checks using checkboxes to calculate estimated turnarounds dynamically, with one-click pre-filled WhatsApp inquiry routing.
   - **Direct WhatsApp Desks**: One-click direct communication for each regional office.

---

## 📝 Urdu / Hindi Summary (خلاصہ)

آپ کے لیے ایک مکمل کسٹم ورڈپریس تھیم **`riskverifier-theme.zip`** تیار کر دی گئی ہے۔

### اپلوڈ کرنے کا آسان طریقہ:
1. اپنے ورڈپریس ایڈمن میں لاگ ان کریں: `riskverifier.com/wp-admin`
2. بائیں مینیو میں **Appearance** > **Themes** پر جائیں۔
3. اوپر **Add New** پر کلک کریں اور پھر **Upload Theme** دبائیں۔
4. فائل **`riskverifier-theme.zip`** منتخب کریں اور **Install Now** پر کلک کریں۔
5. انسٹال ہونے کے بعد صرف **Activate** کا بٹن دبا دیں۔

تمام اصلی مواد (12 سروسز، 5 سٹیپس، تمام ریجنل دفاتر کے فون اور واٹس ایپ لنکس) وائٹ اور بلیو تھیم کے ساتھ مکمل طور پر سیٹ ہو جائیں گے۔
