<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy — Acme Corp</title>

    <style>
        :root {
            color-scheme: light;
            --bg: #f8fafc;
            --card: #ffffff;
            --text: #0f172a;
            --muted: #64748b;
            --brand: #432676;
            --brand-light: #7c4dbc;
            --border: #e2e8f0;
            --gradient: linear-gradient(135deg, #432676 0%, #7c4dbc 50%, #2563eb 100%);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Segoe UI", system-ui, -apple-system, sans-serif;
            color: var(--text);
            background: var(--bg);
            line-height: 1.6;
        }

        a { color: var(--brand-light); text-decoration: none; }
        a:hover { text-decoration: underline; }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .header-inner {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 24px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 20px;
            color: var(--brand);
            text-decoration: none;
        }

        .logo:hover { text-decoration: none; }

        .logo-mark {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: var(--gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 16px;
            font-weight: 800;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav a {
            font-size: 14px;
            font-weight: 500;
            color: var(--muted);
            text-decoration: none;
        }

        .nav a:hover { color: var(--brand); text-decoration: none; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background: var(--gradient);
            color: #fff;
            box-shadow: 0 4px 14px rgba(67, 38, 118, 0.25);
        }

        .page-hero {
            background: #fff;
            border-bottom: 1px solid var(--border);
            padding: 48px 24px 40px;
        }

        .page-hero-inner {
            max-width: 800px;
            margin: 0 auto;
        }

        .page-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            color: var(--brand-light);
            margin-bottom: 8px;
        }

        .page-hero h1 {
            margin: 0 0 12px;
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 800;
            color: var(--text);
        }

        .page-hero p {
            margin: 0;
            color: var(--muted);
            font-size: 15px;
        }

        .policy-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 48px 24px 72px;
        }

        .policy-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 40px 36px;
        }

        @media (max-width: 768px) {
            .nav { display: none; }
            .policy-card { padding: 28px 20px; }
        }

        .policy-card h2 {
            margin: 32px 0 12px;
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
        }

        .policy-card h2:first-child { margin-top: 0; }

        .policy-card p,
        .policy-card li {
            color: var(--muted);
            font-size: 15px;
            line-height: 1.7;
        }

        .policy-card p { margin: 0 0 14px; }

        .policy-card ul {
            margin: 0 0 14px;
            padding-left: 20px;
        }

        .policy-card li { margin-bottom: 6px; }

        .cookie-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0 20px;
            font-size: 14px;
        }

        .cookie-table th,
        .cookie-table td {
            border: 1px solid var(--border);
            padding: 10px 12px;
            text-align: left;
        }

        .cookie-table th {
            background: #faf8ff;
            color: var(--text);
            font-weight: 600;
        }

        .cookie-table td { color: var(--muted); }

        .pref-panel {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: #faf8ff;
        }

        .pref-panel h3 {
            margin: 0 0 6px;
            font-size: 16px;
            font-weight: 700;
            color: var(--text);
        }

        .pref-panel > p {
            margin: 0 0 16px;
            font-size: 13px;
            color: var(--muted);
        }

        .pref-row {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 10px;
            margin-bottom: 12px;
        }

        @media (max-width: 640px) {
            .pref-row { grid-template-columns: 1fr; }
        }

        .pref-row input[type="email"],
        .pref-row input[type="text"],
        .pref-row input[type="tel"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 14px;
            font-family: inherit;
            outline: none;
            background: #fff;
        }

        .pref-row input:focus {
            border-color: var(--brand-light);
        }

        .pref-check {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 8px 0 14px;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: #fff;
        }

        .pref-check input {
            margin-top: 3px;
            width: 16px;
            height: 16px;
            accent-color: var(--brand);
            flex-shrink: 0;
        }

        .pref-check label {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.5;
            cursor: pointer;
        }

        .pref-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .btn-outline {
            background: #fff;
            color: var(--brand);
            border: 1px solid rgba(67, 38, 118, 0.2);
        }

        .btn-danger {
            background: #fff;
            color: #dc2626;
            border: 1px solid rgba(220, 38, 38, 0.25);
        }

        .pref-status {
            margin-top: 12px;
            font-size: 13px;
            color: var(--muted);
        }

        .pref-status.success { color: #16a34a; }
        .pref-status.error { color: #dc2626; }
        .pref-status.info { color: var(--brand); }

        .pref-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .pref-badge.accepted { background: #f0fdf4; color: #16a34a; }
        .pref-badge.withdrawn { background: #fff0f0; color: #dc2626; }
        .pref-badge.none { background: #f1f5f9; color: #64748b; }

        .site-footer {
            background: #0f172a;
            color: #94a3b8;
            padding: 40px 24px;
            font-size: 13px;
        }

        .footer-inner {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .footer-inner strong { color: #fff; font-size: 15px; }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
        }

        .footer-links a:hover { color: #fff; }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a href="index.php" class="logo">
                <span class="logo-mark">A</span>
                Acme Corp
            </a>
            <nav class="nav">
                <a href="index.php#services">Services</a>
                <a href="index.php#about">About</a>
                <a href="index.php#contact">Contact</a>
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="cookie-policy.php">Cookie Policy</a>
            </nav>
            <a href="index.php#contact" class="btn btn-primary">Get a Quote</a>
        </div>
    </header>

    <section class="page-hero">
        <div class="page-hero-inner">
            <div class="page-label">Legal</div>
            <h1>Privacy Policy</h1>
            <p>Last updated: <?php echo date('F j, Y'); ?></p>
        </div>
    </section>

    <main class="policy-content">
        <article class="policy-card">
            <h2>1. Introduction</h2>
            <p>
                Acme Corporation LLC ("Acme Corp", "we", "us", or "our") respects your privacy and is committed to protecting your personal data.
                This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website
                or use our services.
            </p>

            <h2>2. Information We Collect</h2>
            <p>We may collect the following types of information:</p>
            <ul>
                <li><strong>Contact information</strong> — name, email address, phone number, and company name when you submit our contact form.</li>
                <li><strong>Usage data</strong> — pages visited, time spent on site, browser type, device information, and referring URLs.</li>
                <li><strong>Cookie data</strong> — identifiers and preferences stored via cookies and similar technologies (see Section 5).</li>
                <li><strong>Communications</strong> — messages you send us and our responses.</li>
            </ul>

            <h2>3. How We Use Your Information</h2>
            <p>We use collected information to:</p>
            <ul>
                <li>Respond to inquiries and provide customer support</li>
                <li>Deliver and improve our web, cloud, and mobile development services</li>
                <li>Analyze website traffic and user behavior to improve our site</li>
                <li>Send marketing communications (only with your consent where required)</li>
                <li>Comply with legal obligations and protect our rights</li>
            </ul>

            <h2>4. Legal Basis for Processing</h2>
            <p>
                Depending on your location, we process personal data based on your consent, performance of a contract,
                legitimate business interests, or compliance with legal obligations. You may withdraw marketing consent at any time
                using the preference panel below, or change cookie preferences via the cookie settings on our website.
            </p>

            <h2 id="marketing-preferences">4a. Marketing Preferences</h2>
            <p>
                We may use your <strong>name</strong>, <strong>email</strong>, and <strong>phone number</strong> for email marketing
                only if you have given consent (for example, when registering on our website). Use this panel to check,
                update, or withdraw that consent.
            </p>

            <div class="pref-panel" id="marketing-pref-panel">
                <h3>Email marketing consent</h3>
                <p>Enter the email you used when registering to manage your preference.</p>

                <div id="pref-current-badge" class="pref-badge none" hidden>No record found</div>

                <div class="pref-row">
                    <input type="email" id="pref-email" placeholder="you@company.com" autocomplete="email" required>
                    <button type="button" class="btn btn-outline" id="pref-lookup-btn">Check status</button>
                </div>

                <div class="pref-row" style="grid-template-columns: 1fr 1fr;">
                    <input type="text" id="pref-name" placeholder="Full name (optional)" autocomplete="name">
                    <input type="tel" id="pref-phone" placeholder="Phone (optional)" autocomplete="tel">
                </div>

                <div class="pref-check">
                    <input type="checkbox" id="pref-marketing">
                    <label for="pref-marketing">
                        I agree to allow Acme Corp to use my name, email, and phone number for email marketing communications.
                    </label>
                </div>

                <div class="pref-actions">
                    <button type="button" class="btn btn-primary" id="pref-update-btn">Save / Update consent</button>
                    <button type="button" class="btn btn-danger" id="pref-withdraw-btn">Withdraw consent</button>
                </div>
                <p id="pref-note" class="pref-status" hidden></p>
            </div>

            <h2>5. Cookies &amp; Tracking Technologies</h2>
            <p>
                We use cookies and similar technologies to operate our website, remember your preferences, and understand how visitors use our site.
                When you first visit, you can accept all cookies, reject non-essential cookies, or customize your preferences by category.
            </p>

            <table class="cookie-table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Purpose</th>
                        <th>Examples</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Necessary</td>
                        <td>Required for the website to function. Cannot be disabled.</td>
                        <td>Session cookies, security tokens</td>
                    </tr>
                    <tr>
                        <td>Analytics</td>
                        <td>Help us understand how visitors interact with our site.</td>
                        <td>Google Tag Manager, page view tracking</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Used to deliver relevant advertisements and measure campaigns.</td>
                        <td>Remarketing pixels, campaign tags</td>
                    </tr>
                    <tr>
                        <td>Advertising</td>
                        <td>Enable personalized ads across partner networks.</td>
                        <td>Ad network identifiers</td>
                    </tr>
                </tbody>
            </table>

            <p>
                You can change your cookie preferences at any time using the cookie settings on our website.
                Rejecting non-essential cookies will not prevent you from using the site.
            </p>

            <h2>6. Third-Party Services</h2>
            <p>
                We may use third-party service providers for analytics, hosting, email delivery, and advertising.
                These providers process data on our behalf and are bound by contractual obligations to protect your information.
                Third-party sites linked from our website have their own privacy policies.
            </p>

            <h2>7. Data Retention</h2>
            <p>
                We retain personal data only as long as necessary for the purposes described in this policy, unless a longer
                retention period is required by law. Cookie consent records are typically retained for 12 months.
                Contact form submissions are retained for up to 24 months unless you request earlier deletion.
            </p>

            <h2>8. Your Rights</h2>
            <p>Depending on applicable law, you may have the right to:</p>
            <ul>
                <li>Access, correct, or delete your personal data</li>
                <li>Restrict or object to certain processing</li>
                <li>Data portability</li>
                <li>Withdraw consent for cookie preferences (cookie settings) and <a href="#marketing-preferences">marketing preferences</a></li>
                <li>Lodge a complaint with a supervisory authority</li>
            </ul>
            <p>
                To exercise these rights, use the marketing preference panel above, or contact us at
                <a href="mailto:privacy@acmecorp.example">privacy@acmecorp.example</a>.
            </p>

            <h2>9. Data Security</h2>
            <p>
                We implement appropriate technical and organizational measures to protect personal data against unauthorized access,
                alteration, disclosure, or destruction. No method of transmission over the Internet is 100% secure.
            </p>

            <h2>10. International Transfers</h2>
            <p>
                Your information may be transferred to and processed in countries other than your own.
                We ensure appropriate safeguards are in place when transferring data internationally.
            </p>

            <h2>11. Children's Privacy</h2>
            <p>
                Our services are not directed to individuals under 16. We do not knowingly collect personal data from children.
                If you believe we have collected such data, please contact us so we can delete it.
            </p>

            <h2>12. Changes to This Policy</h2>
            <p>
                We may update this Privacy Policy from time to time. The "Last updated" date at the top of this page
                reflects the most recent revision. Continued use of our website after changes constitutes acceptance of the updated policy.
            </p>

            <h2>13. Contact Us</h2>
            <p>
                If you have questions about this Privacy Policy or our data practices, please contact us:
            </p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:privacy@acmecorp.example">privacy@acmecorp.example</a></li>
                <li><strong>Address:</strong> 125 Innovation Street, San Francisco, CA 94105, USA</li>
                <li><strong>Phone:</strong> +1 (555) 123-4567</li>
            </ul>
        </article>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div>
                <strong>Acme Corp</strong><br>
                Web Development · Cloud Management · Mobile Apps
            </div>
            <div class="footer-links">
                <a href="index.php">Home</a>
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="cookie-policy.php">Cookie Policy</a>
            </div>
            <div>&copy; <?php echo date('Y'); ?> Acme Corporation LLC. All rights reserved.</div>
        </div>
    </footer>

    <script
        src="http://localhost:5173/cookie-widget.js"
        data-site-key="zk_68e208fab02c9b37f8b267fb8b308b6c"
        data-api-base="http://localhost:3000"
        async
    ></script>

    <script
        src="http://localhost:5173/consent.js"
        data-organization-key="a0000000-0000-0000-0000-000000000001"
        data-api-base="http://localhost:3000"
        async
    ></script>

    <script>
    (function () {
      var PURPOSE = "email_marketing";
      var emailEl = document.getElementById("pref-email");
      var nameEl = document.getElementById("pref-name");
      var phoneEl = document.getElementById("pref-phone");
      var checkEl = document.getElementById("pref-marketing");
      var badgeEl = document.getElementById("pref-current-badge");
      var noteEl = document.getElementById("pref-note");
      var lookupBtn = document.getElementById("pref-lookup-btn");
      var updateBtn = document.getElementById("pref-update-btn");
      var withdrawBtn = document.getElementById("pref-withdraw-btn");

      function showNote(message, type) {
        noteEl.hidden = false;
        noteEl.textContent = message;
        noteEl.className = "pref-status " + (type || "");
      }

      function setBadge(status) {
        badgeEl.hidden = false;
        if (status === "accepted") {
          badgeEl.className = "pref-badge accepted";
          badgeEl.textContent = "Current status: Accepted";
          checkEl.checked = true;
        } else if (status === "withdrawn" || status === "rejected") {
          badgeEl.className = "pref-badge withdrawn";
          badgeEl.textContent = "Current status: " + (status === "withdrawn" ? "Withdrawn" : "Rejected");
          checkEl.checked = false;
        } else {
          badgeEl.className = "pref-badge none";
          badgeEl.textContent = "No marketing consent record found";
          checkEl.checked = false;
        }
      }

      function waitForCmp(timeoutMs) {
        return new Promise(function (resolve, reject) {
          if (window.CMP && typeof window.CMP.recordConsent === "function") {
            resolve(window.CMP);
            return;
          }
          var started = Date.now();
          var timer = setInterval(function () {
            if (window.CMP && typeof window.CMP.recordConsent === "function") {
              clearInterval(timer);
              resolve(window.CMP);
            } else if (Date.now() - started > (timeoutMs || 5000)) {
              clearInterval(timer);
              reject(new Error("CMP SDK not loaded"));
            }
          }, 100);
        });
      }

      function subjectFromForm() {
        return {
          name: (nameEl.value || "").trim() || null,
          email: (emailEl.value || "").trim().toLowerCase(),
          phone: (phoneEl.value || "").trim() || null,
        };
      }

      lookupBtn.addEventListener("click", async function () {
        var email = (emailEl.value || "").trim();
        if (!email) {
          emailEl.focus();
          showNote("Enter your email to check status.", "error");
          return;
        }
        try {
          var cmp = await waitForCmp(5000);
          var result = await cmp.hasConsent(email, PURPOSE).then(function (has) {
            return cmp.getConsent(email).then(function (all) {
              var match = (all.records || []).find(function (r) {
                return (r.purposeKey || "").indexOf("email_marketing") === 0 ||
                  (r.purpose || "").toLowerCase().indexOf("email marketing") !== -1;
              });
              return { has: has, status: match ? match.status : (has ? "accepted" : null) };
            });
          });
          setBadge(result.status);
          showNote(result.has ? "You currently allow email marketing." : "Email marketing is not active for this email.", "info");
        } catch (err) {
          console.error(err);
          showNote(err.message || "Could not look up consent.", "error");
        }
      });

      updateBtn.addEventListener("click", async function () {
        var subject = subjectFromForm();
        if (!subject.email) {
          emailEl.focus();
          showNote("Email is required.", "error");
          return;
        }
        if (!checkEl.checked) {
          showNote("Check the marketing box to grant consent, or use Withdraw.", "error");
          return;
        }
        try {
          var cmp = await waitForCmp(5000);
          await cmp.updateConsent({
            purpose: PURPOSE,
            status: "accepted",
            subject: subject,
          });
          setBadge("accepted");
          showNote("Marketing consent saved / updated.", "success");
        } catch (err) {
          console.error(err);
          showNote(err.message || "Could not update consent.", "error");
        }
      });

      withdrawBtn.addEventListener("click", async function () {
        var subject = subjectFromForm();
        if (!subject.email) {
          emailEl.focus();
          showNote("Email is required to withdraw consent.", "error");
          return;
        }
        try {
          var cmp = await waitForCmp(5000);
          await cmp.withdrawConsent({
            purpose: PURPOSE,
            identifier: { email: subject.email, name: subject.name, phone: subject.phone },
          });
          setBadge("withdrawn");
          showNote("Marketing consent withdrawn. We will keep the audit record.", "success");
        } catch (err) {
          console.error(err);
          showNote(err.message || "Could not withdraw consent.", "error");
        }
      });
    })();
    </script>
</body>
</html>
