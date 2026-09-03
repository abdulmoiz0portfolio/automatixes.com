<?php 
include_once 'security.php'; 

if (!isset($page_key)) {
    $page_key = 'index';
}

$meta_config = [
    'index' => [
        'title' => 'AI Automation Agency (n8n, Make, GoHighLevel) | Automatixes',
        'desc' => 'Automatixes is an AI-first agency building custom AI agents and workflow automations to connect your CRM, WhatsApp, and emails. Scale operations 24/7.',
        'keywords' => 'AI Automation Agency, n8n, Make, GoHighLevel, Zapier, AI Agents, software development, CRM integration',
        'url' => ''
    ],
    'about' => [
        'title' => 'Our Mission & Automation Experts | Automatixes',
        'desc' => 'Meet Automatixes. We design custom AI agent systems, API integrations, and e-commerce growth strategies to help small & mid-sized businesses automate operations.',
        'keywords' => 'About Automatixes, AI Engineers, CRM automation experts, n8n consultants',
        'url' => 'about'
    ],
    'ai-automated-solutions' => [
        'title' => 'AI Automated Solutions (Agents & Workflows) | Automatixes',
        'desc' => 'Deploy custom AI agents for 24/7 support and eliminate manual tasks with end-to-end automations connecting your CRM, Slack, and email platforms.',
        'keywords' => 'AI Automations, Autonomous AI Agents, n8n agency, Make.com integration, custom RAG, workflow automation',
        'url' => 'ai-automated-solutions'
    ],
    'product-shoot' => [
        'title' => 'AI Product Staging, 3D Backgrounds & Commercial Edits | Automatixes',
        'desc' => 'Transform simple raw product photos into eye-catching commercial masterpieces with photorealistic AI backgrounds, 3D staging, and cinematic lighting.',
        'keywords' => 'AI Product Staging, AI Background Replacement, Commercial Product Editing, E-commerce Mockup Staging, Automatixes',
        'url' => 'product-shoot'
    ],
    'contact' => [
        'title' => 'Book a Free AI Operations Audit & Consultation | Automatixes',
        'desc' => 'Ready to automate your operations? Contact Automatixes to schedule a free automation audit. We connect your calendar, CRM, and communication tools.',
        'keywords' => 'Contact Automatixes, AI operations audit, book consultation, digital agency',
        'url' => 'contact'
    ],
    'admin' => [
        'title' => 'CRM Lead Logs Control Panel | Automatixes',
        'desc' => 'Internal dashboard for Automatixes administrators to track real-time contact leads, newsletter subscribers, and automated cost quote submissions.',
        'keywords' => 'Admin dashboard, lead tracking, CRM logs',
        'url' => 'admin'
    ],
    'invoice-maker' => [
        'title' => 'Free Online Invoice Maker | Automatixes',
        'desc' => 'Generate professional, customizable invoices instantly with live math calculations, dynamic line items, and print/PDF export from Automatixes.',
        'keywords' => 'Free Invoice Maker, online invoice generator, Automatixes invoice tool, automated invoice PDF, billing software',
        'url' => 'invoice-maker'
    ],
    'voice-agent' => [
        'title' => 'Talk to our AI Voice Agent | Automatixes',
        'desc' => 'Experience the future of customer support. Click to start a live voice conversation with our autonomous AI agent.',
        'keywords' => 'AI Voice Agent, Vapi AI, Retell AI, conversational AI, voicebot demo',
        'url' => 'voice-agent'
    ],
    'blogs' => [
        'title' => 'Insights & Updates | Automatixes',
        'desc' => 'Read our latest insights on AI automation, web development, and digital marketing strategies for growing your business.',
        'keywords' => 'Automatixes blog, AI automation insights, web development tips, business growth',
        'url' => 'blogs'
    ],
    'blog-detail' => [
        'title' => 'Blog Detail | Automatixes',
        'desc' => 'Read the full article and gain insights into AI automation, digital operations, and bespoke software development.',
        'keywords' => 'Automatixes blog, article',
        'url' => 'blog-detail'
    ]
];

$active_meta = isset($meta_config[$page_key]) ? $meta_config[$page_key] : $meta_config['index'];
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'automatixes.com';
$forwarded_proto = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) : '';
$protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || $forwarded_proto === 'https') ? "https" : "http";
$canonical_url = "{$protocol}://{$host}/" . $active_meta['url'];
$og_image = "{$protocol}://{$host}/assets/img/services/ai_automations.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Consent Mode v2 (must fire BEFORE gtag.js) -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('consent', 'default', {
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied',
        'analytics_storage': 'denied',
        'wait_for_update': 500
      });
      gtag('set', 'ads_data_redaction', true);
      gtag('set', 'url_passthrough', true);

      if (localStorage.getItem('cookie_consent') === 'granted') {
        gtag('consent', 'update', {
          'ad_storage': 'granted',
          'ad_user_data': 'granted',
          'ad_personalization': 'granted',
          'analytics_storage': 'granted'
        });
      }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QNFRW1GPJR"></script>
    <script>
      gtag('js', new Date());
      gtag('config', 'G-QNFRW1GPJR');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $active_meta['title']; ?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="manifest" href="site.webmanifest">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    
    <!-- Meta SEO Tags -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="description" content="<?php echo $active_meta['desc']; ?>">
    <meta name="keywords" content="<?php echo $active_meta['keywords']; ?>">
    <meta name="author" content="Automatixes">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:title" content="<?php echo $active_meta['title']; ?>">
    <meta property="og:description" content="<?php echo $active_meta['desc']; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo $canonical_url; ?>">
    <meta name="twitter:title" content="<?php echo $active_meta['title']; ?>">
    <meta name="twitter:description" content="<?php echo $active_meta['desc']; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- Hreflang Tags for SEO/GEO -->
    <link rel="alternate" hreflang="x-default" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="en" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="en-us" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="en-gb" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="en-ca" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="ar" href="<?php echo $canonical_url; ?>">

    <!-- JSON-LD Structured Data Schema -->
    <!-- WebSite Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Automatixes",
      "url": "<?php echo $protocol; ?>://<?php echo $host; ?>",
      "description": "An AI-first automation agency that designs custom AI agents and workflow automations to run business operations 24/7."
    }
    </script>

    <!-- LocalBusiness & Organization Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Automatixes",
      "url": "<?php echo $protocol; ?>://<?php echo $host; ?>",
      "logo": "<?php echo $protocol; ?>://<?php echo $host; ?>/assets/img/services/ai_automations.jpg",
      "image": "<?php echo $protocol; ?>://<?php echo $host; ?>/assets/img/services/ai_automations.jpg",
      "description": "An AI-first automation agency that designs custom AI agents and workflow automations to run business operations 24/7.",
      "telephone": "+92-336-6920141",
      "email": "contact@automatixes.com",
      "areaServed": [
        {"@type": "Country", "name": "USA"},
        {"@type": "Country", "name": "Canada"},
        {"@type": "Region", "name": "Europe"},
        {"@type": "Region", "name": "Arabian Peninsula"},
        {"@type": "Country", "name": "Global"}
      ]
    }
    </script>

    <!-- Service Schema -->
    <?php if (in_array($page_key, ['ai-automated-solutions', 'website-development', 'product-shoot'])): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "<?php echo $active_meta['title']; ?>",
      "serviceType": "<?php echo str_replace(' | Automatixes', '', $active_meta['title']); ?>",
      "provider": {
        "@type": "Organization",
        "name": "Automatixes",
        "url": "<?php echo $protocol; ?>://<?php echo $host; ?>"
      },
      "description": "<?php echo $active_meta['desc']; ?>",
      "areaServed": {
        "@type": "Place",
        "name": "Worldwide"
      }
    }
    </script>
    <?php endif; ?>

    <!-- BreadcrumbList Schema -->
    <?php if ($page_key !== 'index'): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo $protocol; ?>://<?php echo $host; ?>"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "<?php echo str_replace(' | Automatixes', '', $active_meta['title']); ?>",
        "item": "<?php echo $canonical_url; ?>"
      }]
    }
    </script>
    <?php endif; ?>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome CDN for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Google Fonts: Syne (Preloader) / Outfit (Headings) / Plus Jakarta Sans (Body) / Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Mono:wght@400;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Custom Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css?v=14.0.0">

        <!-- Google Sitelinks & SiteNavigationElement Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ItemList",
          "name": "Automatixes AI Solutions & Tools",
          "itemListElement": [
            {
              "@type": "SiteNavigationElement",
              "position": 1,
              "name": "AI Automated Solutions",
              "description": "Custom autonomous AI agents and n8n/Make workflows for CRM, lead qualification, and support.",
              "url": "https://www.automatixes.com/ai-automated-solutions"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 2,
              "name": "AI Voice Agents",
              "description": "Human-like conversational AI voice agents for inbound support and automated outbound qualification.",
              "url": "https://www.automatixes.com/voice-agent"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 3,
              "name": "AI Product Staging & Shoots",
              "description": "Photorealistic 3D AI staging and commercial product mockups for e-commerce brands.",
              "url": "https://www.automatixes.com/product-shoot"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 4,
              "name": "Our Process & Methodology",
              "description": "4-stage engineering blueprint: Audit, Architecture, Integration, and 24/7 Operations.",
              "url": "https://www.automatixes.com/process"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 5,
              "name": "Customer Ratings & Reviews",
              "description": "Verified client testimonials and real ROI case studies from enterprise automation deployments.",
              "url": "https://www.automatixes.com/reviews"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 6,
              "name": "Book Free AI Consultation",
              "description": "Schedule a 1-on-1 strategy call to identify automation bottlenecks and calculate projected ROI.",
              "url": "https://www.automatixes.com/contact"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 7,
              "name": "Free Dynamic QR Studio",
              "description": "Enterprise-grade QR generator with custom logo branding and live scan telemetry.",
              "url": "https://qrcode.automatixes.com/"
            },
            {
              "@type": "SiteNavigationElement",
              "position": 8,
              "name": "Free Invoice Maker & PDF Ledger",
              "description": "Professional A4 PDF financial ledger generator with instant tax calculations.",
              "url": "https://invoicemaker.automatixes.com/"
            }
          ]
        }
      ]
    }
    </script>

</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="A" class="letters-loading">A</span>
                <span data-text-preloader="U" class="letters-loading">U</span>
                <span data-text-preloader="T" class="letters-loading">T</span>
                <span data-text-preloader="O" class="letters-loading">O</span>
                <span data-text-preloader="M" class="letters-loading">M</span>
                <span data-text-preloader="A" class="letters-loading">A</span>
                <span data-text-preloader="T" class="letters-loading">T</span>
                <span data-text-preloader="I" class="letters-loading">I</span>
                <span data-text-preloader="X" class="letters-loading">X</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
            </div>
            <p class="text-center loading-subtitle">Loading</p>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Navigation Start -->
    <header id="header-sticky" class="header-nav">
        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-0">
                <a class="navbar-brand d-flex align-items-center" href="index">
                    <img src="assets/img/logo/automatixes-logo-new.png" alt="Automatixes Logo" style="height: 45px; width: auto; object-fit: contain;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                                <div class="collapse navbar-collapse d-lg-flex justify-content-between" id="mainNavbar">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="servicesDropdown">
                                <li><a class="dropdown-item py-2 fw-semibold" href="ai-automated-solutions">AI Automated Solutions</a></li>
                                <li><a class="dropdown-item py-2 fw-semibold d-flex align-items-center justify-content-between" href="voice-agent"><span>AI Voice Agents</span> <span class="badge bg-danger rounded-pill ms-2" style="font-size: 0.65rem; background: linear-gradient(135deg, #FF3B30, #FF9500) !important;">🔥 HIGH DEMAND</span></a></li>
                                <li><a class="dropdown-item py-2 fw-semibold" href="product-shoot">AI Product Staging & Visuals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link text-nowrap" href="reviews">Customer Ratings</a></li>
                                                <li class="nav-item"><a class="nav-link text-nowrap" href="portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap" href="process">Process</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap" href="blogs">Blogs</a></li>
                        <li class="nav-item"><a class="nav-link text-nowrap" href="contact">Contact us</a></li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="contact" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold text-nowrap">Get Started</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Navigation End -->

    <div id="smooth-wrapper">
        <div id="smooth-content">








