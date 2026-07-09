<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acme Corp — Web, Cloud & Mobile Solutions</title>

    <style>
        :root {
            color-scheme: light;
            --bg: #f8fafc;
            --card: #ffffff;
            --text: #0f172a;
            --muted: #64748b;
            --brand: #432676;
            --brand-light: #7c4dbc;
            --accent: #2563eb;
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

        a { color: inherit; text-decoration: none; }

        /* Header */
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
        }

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
            transition: color 0.2s;
        }

        .nav a:hover { color: var(--brand); }

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
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-primary {
            background: var(--gradient);
            color: #fff;
            box-shadow: 0 4px 14px rgba(67, 38, 118, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(67, 38, 118, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--brand);
            border: 1px solid rgba(67, 38, 118, 0.2);
        }

        /* Hero */
        .hero {
            background: var(--gradient);
            color: #fff;
            padding: 80px 24px 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 80%, rgba(255,255,255,0.08) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(255,255,255,0.06) 0%, transparent 40%);
        }

        .hero-inner {
            max-width: 720px;
            margin: 0 auto;
            position: relative;
        }

        .hero-badge {
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 999px;
            padding: 6px 14px;
            margin-bottom: 20px;
        }

        .hero h1 {
            margin: 0 0 16px;
            font-size: clamp(32px, 5vw, 48px);
            line-height: 1.15;
            font-weight: 800;
        }

        .hero p {
            margin: 0 0 32px;
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.7;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .hero .btn-primary {
            background: #fff;
            color: var(--brand);
        }

        .hero .btn-outline {
            border-color: rgba(255,255,255,0.4);
            color: #fff;
        }

        /* Sections */
        .section {
            max-width: 1140px;
            margin: 0 auto;
            padding: 72px 24px;
        }

        .section-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 48px;
        }

        .section-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            color: var(--brand-light);
            margin-bottom: 8px;
        }

        .section-header h2 {
            margin: 0 0 12px;
            font-size: 32px;
            font-weight: 800;
            color: var(--text);
        }

        .section-header p {
            margin: 0;
            color: var(--muted);
            font-size: 16px;
        }

        /* Services */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
        }

        .service-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 32px 28px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(67, 38, 118, 0.1);
        }

        .service-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .service-card:nth-child(1) .service-icon { background: #ede9fe; }
        .service-card:nth-child(2) .service-icon { background: #dbeafe; }
        .service-card:nth-child(3) .service-icon { background: #d1fae5; }

        .service-card h3 {
            margin: 0 0 10px;
            font-size: 20px;
            font-weight: 700;
        }

        .service-card p {
            margin: 0 0 16px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.65;
        }

        .service-card ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .service-card li {
            font-size: 13px;
            color: #475569;
            padding: 6px 0;
            padding-left: 20px;
            position: relative;
        }

        .service-card li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--brand-light);
            font-weight: 700;
        }

        /* About */
        .about-section {
            background: #fff;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
        }

        @media (max-width: 768px) {
            .about-grid { grid-template-columns: 1fr; }
            .nav { display: none; }
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .stat-box {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 24px;
            text-align: center;
        }

        .stat-box strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--brand);
            margin-bottom: 4px;
        }

        .stat-box span {
            font-size: 13px;
            color: var(--muted);
        }

        /* Contact */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        @media (max-width: 768px) {
            .contact-grid { grid-template-columns: 1fr; }
        }

        .contact-info p {
            margin: 0 0 12px;
            color: var(--muted);
            font-size: 15px;
        }

        .contact-form {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 28px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-size: 14px;
            font-family: inherit;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--brand-light);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Footer */
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

        .footer-inner strong {
            color: #fff;
            font-size: 15px;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: #fff;
        }
    </style>

    <!-- Demo analytics cookies (detected by Zerra scanner via script signatures) -->

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMM2H66X');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMM2H66X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="site-header">
        <div class="header-inner">
            <a href="#" class="logo">
                <span class="logo-mark">A</span>
                Acme Corp
            </a>
            <nav class="nav">
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="cookie-policy.php">Cookie Policy</a>
            </nav>
            <a href="#contact" class="btn btn-primary">Get a Quote</a>
        </div>
    </header>

    <section class="hero">
        <div class="hero-inner">
            <span class="hero-badge">Technology Partner</span>
            <h1>Build, Scale &amp; Ship Digital Products</h1>
            <p>We design and deliver modern web applications, cloud infrastructure, and mobile experiences for startups and enterprises worldwide.</p>
            <div class="hero-actions">
                <a href="#services" class="btn btn-primary">Explore Services</a>
                <a href="#contact" class="btn btn-outline">Talk to Us</a>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <div class="section-header">
            <div class="section-label">What We Do</div>
            <h2>Our Services</h2>
            <p>End-to-end technology solutions tailored to your business goals, from idea to production.</p>
        </div>

        <div class="services-grid">
            <article class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Web Development</h3>
                <p>Custom websites and web applications built with modern frameworks, responsive design, and performance in mind.</p>
                <ul>
                    <li>React, Vue &amp; Next.js applications</li>
                    <li>E-commerce &amp; SaaS platforms</li>
                    <li>API design &amp; integration</li>
                    <li>UI/UX design &amp; prototyping</li>
                </ul>
            </article>

            <article class="service-card">
                <div class="service-icon">☁️</div>
                <h3>Cloud Management</h3>
                <p>Secure, scalable cloud infrastructure on AWS, Azure, and GCP — managed so your team can focus on product.</p>
                <ul>
                    <li>Cloud migration &amp; architecture</li>
                    <li>Kubernetes &amp; container orchestration</li>
                    <li>DevOps, CI/CD &amp; monitoring</li>
                    <li>Cost optimization &amp; security</li>
                </ul>
            </article>

            <article class="service-card">
                <div class="service-icon">📱</div>
                <h3>Mobile App Development</h3>
                <p>Native and cross-platform mobile apps for iOS and Android that deliver seamless user experiences.</p>
                <ul>
                    <li>iOS (Swift) &amp; Android (Kotlin)</li>
                    <li>React Native &amp; Flutter</li>
                    <li>App Store &amp; Play Store deployment</li>
                    <li>Push notifications &amp; offline support</li>
                </ul>
            </article>
        </div>
    </section>

    <section id="about" class="section about-section">
        <div class="about-grid">
            <div>
                <div class="section-label">About Acme Corp</div>
                <h2 style="font-size: 28px; font-weight: 800; margin: 0 0 16px;">Trusted by 200+ businesses since 2018</h2>
                <p style="color: var(--muted); margin: 0 0 16px; font-size: 15px;">
                    Acme Corp is a full-service technology company headquartered in San Francisco. We partner with organizations of all sizes to build reliable software, modernize legacy systems, and accelerate digital transformation.
                </p>
                <p style="color: var(--muted); margin: 0; font-size: 15px;">
                    Our team of engineers, designers, and cloud architects brings deep expertise across the full product lifecycle — from discovery and design through development, deployment, and ongoing support.
                </p>
            </div>
            <div class="about-stats">
                <div class="stat-box">
                    <strong>200+</strong>
                    <span>Projects Delivered</span>
                </div>
                <div class="stat-box">
                    <strong>150+</strong>
                    <span>Team Members</span>
                </div>
                <div class="stat-box">
                    <strong>8 yrs</strong>
                    <span>Industry Experience</span>
                </div>
                <div class="stat-box">
                    <strong>24/7</strong>
                    <span>Support Available</span>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="section-header">
            <div class="section-label">Get in Touch</div>
            <h2>Contact Us</h2>
            <p>Have a project in mind? We'd love to hear from you.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <p><strong>Email:</strong> hello@acmecorp.example</p>
                <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                <p><strong>Address:</strong> 125 Innovation Street, San Francisco, CA 94105, USA</p>
                <p><strong>Hours:</strong> Mon–Fri, 9:00 AM – 6:00 PM PST</p>
            </div>

            <form class="contact-form" onsubmit="event.preventDefault(); alert('Thank you! We will get back to you soon.');">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@company.com" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Tell us about your project..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-inner">
            <div>
                <strong>Acme Corp</strong><br>
                Web Development · Cloud Management · Mobile Apps
            </div>
            <div class="footer-links">
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="cookie-policy.php">Cookie Policy</a>
            </div>
            <div>&copy; <?php echo date('Y'); ?> Acme Corporation LLC. All rights reserved.</div>
        </div>
    </footer>

    <script
  src="http://localhost:5173/cookie-widget.js"
  data-site-key="zk_176d7ab8c5a3a7c048b6fbc154bbb77f"
  data-api-base="http://localhost:3000"
  async
></script>
</body>
</html>
