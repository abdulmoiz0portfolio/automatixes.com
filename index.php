<?php $page_key = 'index'; include 'header.php'; ?>

<!-- Hero Section Start -->
<section class="hero-section position-relative d-flex align-items-center justify-content-center text-center" style="min-height: 100vh; overflow: hidden; padding-top: 100px;">
    <!-- Abstract Glowing Orbs (Automatixes Style) -->
    <div class="position-absolute rounded-circle" style="background: radial-gradient(circle, rgba(200, 224, 25,0.35) 0%, rgba(0,0,0,0) 70%); width: 700px; height: 700px; top: -100px; left: -150px; filter: blur(80px); z-index: 0; pointer-events: none;"></div>
    <div class="position-absolute rounded-circle" style="background: radial-gradient(circle, rgba(168,85,247,0.2) 0%, rgba(0,0,0,0) 70%); width: 600px; height: 600px; bottom: -50px; right: -100px; filter: blur(80px); z-index: 0; pointer-events: none;"></div>
    
    <!-- Floating Automation Workflow Nodes (Left) -->
    <style>
        @keyframes heroFloat {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
    <!-- Floating Automation Workflow Nodes (Left - n8n Workflow) -->
    <div class="position-absolute d-none d-lg-block" style="top: 25%; left: 8%; z-index: 0; opacity: 0.3; pointer-events: none; animation: heroFloat 6s ease-in-out infinite;">
        <svg width="240" height="280" viewBox="0 0 240 280" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
            <defs>
                <!-- Canvas Grid Pattern -->
                <pattern id="n8nCanvasGrid" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                    <circle cx="8" cy="8" r="0.75" fill="#ffffff" fill-opacity="0.15"/>
                </pattern>
                
                <!-- Connection Gradients -->
                <linearGradient id="n8nGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#C8E019" stop-opacity="0.9"/>
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.7"/>
                </linearGradient>
                <linearGradient id="n8nGrad2" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.7"/>
                    <stop offset="100%" stop-color="#C8E019" stop-opacity="0.9"/>
                </linearGradient>
                <linearGradient id="n8nGrad3" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.7"/>
                    <stop offset="100%" stop-color="#94a3b8" stop-opacity="0.5"/>
                </linearGradient>
            </defs>

            <!-- Background Canvas Texture -->
            <rect width="240" height="280" fill="url(#n8nCanvasGrid)" rx="16"/>

            <!-- Connection Paths -->
            <!-- Path 1: Trigger to AI Engine -->
            <path d="M68 44 C118 44, 102 110, 152 110" stroke="url(#n8nGrad1)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Path 2: AI Engine to Action Sync (Vertical Primary) -->
            <path d="M176 134 L176 208" stroke="url(#n8nGrad2)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Path 3: AI Engine to Dispatch/Notification (Branch Secondary) -->
            <path d="M152 122 C100 122, 120 198, 68 198" stroke="url(#n8nGrad3)" stroke-width="1.75" stroke-dasharray="4 4" stroke-linecap="round" fill="none"/>

            <!-- Data Packet Pulse Indicators -->
            <circle cx="110" cy="77" r="2.5" fill="#C8E019"/>
            <circle cx="176" cy="171" r="2.5" fill="#C8E019"/>
            <circle cx="108" cy="160" r="2" fill="#ffffff" fill-opacity="0.8"/>

            <!-- Node 1: Webhook Trigger (Top Left) -->
            <g id="node-trigger">
                <rect x="20" y="20" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Lightning Trigger Glyph -->
                <path d="M45 32 L37 44 L43 44 L41 56 L51 42 L45 42 Z" fill="#C8E019"/>
                <!-- Status Indicator -->
                <circle cx="62" cy="24" r="4.5" fill="#111827" stroke="#C8E019" stroke-width="1.2"/>
                <path d="M60 24 L61.5 25.5 L64.5 22.5" fill="none" stroke="#C8E019" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                <!-- Output Port -->
                <circle cx="68" cy="44" r="3" fill="#C8E019" stroke="#111827" stroke-width="1"/>
            </g>

            <!-- Node 2: AI Processor / Router (Center Right) -->
            <g id="node-router">
                <rect x="152" y="86" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#ffffff" stroke-opacity="0.6" stroke-width="1.5"/>
                <!-- AI Sparkle Icon -->
                <path d="M176 99 C176 105 181 110 187 110 C181 110 176 115 176 121 C176 115 171 110 165 110 C171 110 176 105 176 99 Z" fill="#C8E019"/>
                <path d="M185 94 C185 96.5 187.5 99 190 99 C187.5 99 185 101.5 185 104 C185 101.5 182.5 99 180 99 C182.5 99 185 96.5 185 94 Z" fill="#ffffff" fill-opacity="0.8"/>
                <!-- Input Port -->
                <circle cx="152" cy="110" r="3" fill="#ffffff" stroke="#111827" stroke-width="1"/>
                <!-- Output Ports -->
                <circle cx="176" cy="134" r="3" fill="#C8E019" stroke="#111827" stroke-width="1"/>
                <circle cx="152" cy="122" r="3" fill="#94a3b8" stroke="#111827" stroke-width="1"/>
            </g>

            <!-- Node 3: Database / CRM Action (Bottom Right) -->
            <g id="node-database">
                <rect x="152" y="208" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Database / Storage Icon -->
                <ellipse cx="176" cy="223" rx="10" ry="3.5" fill="none" stroke="#C8E019" stroke-width="1.5"/>
                <path d="M166 228 C166 231 170.5 232.5 176 232.5 C181.5 232.5 186 231 186 228" fill="none" stroke="#C8E019" stroke-width="1.5"/>
                <path d="M166 234 C166 237 170.5 238.5 176 238.5 C181.5 238.5 186 237 186 234" fill="none" stroke="#C8E019" stroke-width="1.5"/>
                <line x1="166" y1="223" x2="166" y2="234" stroke="#C8E019" stroke-width="1.5"/>
                <line x1="186" y1="223" x2="186" y2="234" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Input Port -->
                <circle cx="176" cy="208" r="3" fill="#C8E019" stroke="#111827" stroke-width="1"/>
            </g>

            <!-- Node 4: Dispatch / Notification (Bottom Left) -->
            <g id="node-notification">
                <rect x="20" y="174" width="48" height="48" rx="12" fill="#ffffff" fill-opacity="0.04" stroke="#ffffff" stroke-opacity="0.6" stroke-width="1.5"/>
                <!-- Paper Plane / Send Icon -->
                <path d="M35 199 L53 189 L45 207 L42 200 Z" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round"/>
                <line x1="53" y1="189" x2="42" y2="200" stroke="#C8E019" stroke-width="1.5" stroke-linecap="round"/>
                <!-- Input Port -->
                <circle cx="68" cy="198" r="3" fill="#ffffff" stroke="#111827" stroke-width="1"/>
            </g>
        </svg>
    </div>
    
    <!-- Floating Automation Workflow Nodes (Right - CRM / Make Stack) -->
    <div class="position-absolute d-none d-lg-block" style="bottom: 15%; right: 10%; z-index: 0; opacity: 0.3; pointer-events: none; animation: heroFloat 8s ease-in-out infinite reverse;">
        <svg width="260" height="260" viewBox="0 0 260 260" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
            <defs>
                <!-- Flow Gradients -->
                <linearGradient id="makeFlow1" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#C8E019" stop-opacity="0.9"/>
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.7"/>
                </linearGradient>
                <linearGradient id="makeFlow2" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.7"/>
                    <stop offset="100%" stop-color="#C8E019" stop-opacity="0.9"/>
                </linearGradient>
                <linearGradient id="makeFlow3" x1="0%" y1="0%" x2="100%" y2="50%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8"/>
                    <stop offset="100%" stop-color="#C8E019" stop-opacity="0.8"/>
                </linearGradient>
                <linearGradient id="makeFlow4" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8"/>
                    <stop offset="100%" stop-color="#94a3b8" stop-opacity="0.6"/>
                </linearGradient>
                <linearGradient id="makeFlow5" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#C8E019" stop-opacity="0.8"/>
                    <stop offset="100%" stop-color="#94a3b8" stop-opacity="0.5"/>
                </linearGradient>
            </defs>

            <!-- Background Orbital Guide Rings (Make.com Canvas Texture) -->
            <circle cx="130" cy="130" r="55" stroke="#ffffff" stroke-opacity="0.08" stroke-dasharray="3 5" fill="none"/>
            <circle cx="130" cy="130" r="95" stroke="#C8E019" stroke-opacity="0.08" stroke-dasharray="4 6" fill="none"/>
            <circle cx="130" cy="130" r="120" stroke="#ffffff" stroke-opacity="0.04" stroke-dasharray="6 8" fill="none"/>

            <!-- Connection Conduits -->
            <!-- Conduit 1: Trigger -> Hub -->
            <path d="M63 90 C90 90, 95 130, 105 130" stroke="url(#makeFlow1)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 2: Hub -> CRM Target -->
            <path d="M151 118 C170 100, 185 60, 197 60" stroke="url(#makeFlow2)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 3: Hub -> Database Sync -->
            <path d="M155 135 C175 135, 185 155, 209 155" stroke="url(#makeFlow3)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 4: Hub -> Instant Messaging -->
            <path d="M145 151 C155 175, 162 195, 173 214" stroke="url(#makeFlow4)" stroke-width="1.75" stroke-linecap="round" fill="none"/>
            <!-- Conduit 5: Hub -> AI Lead Scoring (Secondary Branch) -->
            <path d="M112 148 C95 170, 88 185, 77 204" stroke="url(#makeFlow5)" stroke-width="1.5" stroke-dasharray="3 3" stroke-linecap="round" fill="none"/>

            <!-- Filter Badge (Between Trigger and Hub) -->
            <g id="filter-badge">
                <circle cx="84" cy="110" r="6.5" fill="#111827" stroke="#C8E019" stroke-width="1.2"/>
                <path d="M81.5 107.5 L86.5 107.5 L84.5 110 L84.5 113 L83.5 113 L83.5 110 Z" fill="#C8E019"/>
            </g>

            <!-- Data Pulse Packets -->
            <circle cx="73" cy="98" r="2" fill="#ffffff"/>
            <circle cx="178" cy="84" r="2.5" fill="#C8E019"/>
            <circle cx="184" cy="147" r="2" fill="#ffffff"/>
            <circle cx="156" cy="178" r="2.5" fill="#C8E019"/>
            <circle cx="98" cy="172" r="2" fill="#C8E019"/>

            <!-- Module 1: Webhook / Lead Ingest Trigger (Top-Left) -->
            <g id="module-trigger">
                <circle cx="45" cy="90" r="23" stroke="#C8E019" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="3 3" fill="none"/>
                <circle cx="45" cy="90" r="18" fill="#ffffff" fill-opacity="0.05" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Lightning Bolt Ingest Glyph -->
                <path d="M47 81 L41 89 L46 89 L43 99 L51 88 L46 88 Z" fill="#C8E019"/>
                <!-- Connection Output Port -->
                <circle cx="63" cy="90" r="2.5" fill="#C8E019" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 2: Central Make Router / Orchestrator Hub (Center) -->
            <g id="module-router-hub">
                <circle cx="130" cy="130" r="32" stroke="#C8E019" stroke-opacity="0.2" stroke-width="1.5" stroke-dasharray="2 3" fill="none"/>
                <circle cx="130" cy="130" r="25" fill="#ffffff" fill-opacity="0.06" stroke="#ffffff" stroke-width="1.75"/>
                <circle cx="130" cy="130" r="15" fill="#C8E019" fill-opacity="0.12" stroke="#C8E019" stroke-width="1.25"/>
                <!-- Make Router Split Glyph -->
                <circle cx="130" cy="130" r="3.5" fill="#C8E019"/>
                <path d="M130 126.5 L130 120 M132.5 131.5 L138 135 M127.5 131.5 L122 135" stroke="#C8E019" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="130" cy="119" r="1.5" fill="#ffffff"/>
                <circle cx="139" cy="136" r="1.5" fill="#ffffff"/>
                <circle cx="121" cy="136" r="1.5" fill="#ffffff"/>
                <!-- Hub Connection Ports -->
                <circle cx="105" cy="130" r="2.5" fill="#C8E019"/>
                <circle cx="151" cy="118" r="2.5" fill="#C8E019"/>
                <circle cx="155" cy="135" r="2.5" fill="#ffffff"/>
                <circle cx="145" cy="151" r="2.5" fill="#ffffff"/>
                <circle cx="112" cy="148" r="2.5" fill="#94a3b8"/>
            </g>

            <!-- Module 3: CRM Lead Profile Target (Top-Right) -->
            <g id="module-crm-lead">
                <circle cx="215" cy="60" r="22" stroke="#ffffff" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="3 3" fill="none"/>
                <circle cx="215" cy="60" r="18" fill="#ffffff" fill-opacity="0.05" stroke="#ffffff" stroke-width="1.5"/>
                <!-- CRM User Avatar Glyph -->
                <circle cx="215" cy="55" r="3.5" stroke="#C8E019" stroke-width="1.3" fill="none"/>
                <path d="M208 67 C208 63 211 61 215 61 C219 61 222 63 222 67" stroke="#C8E019" stroke-width="1.3" fill="none" stroke-linecap="round"/>
                <circle cx="221" cy="53" r="2" fill="#C8E019"/>
                <!-- Input Port -->
                <circle cx="197" cy="60" r="2.5" fill="#ffffff" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 4: Cloud Database / Store Sync (Middle-Right) -->
            <g id="module-database-sync">
                <circle cx="225" cy="155" r="20" stroke="#C8E019" stroke-opacity="0.3" stroke-width="1.25" fill="none"/>
                <circle cx="225" cy="155" r="16" fill="#ffffff" fill-opacity="0.05" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Database Cylinder Stack Glyph -->
                <ellipse cx="225" cy="148" rx="6.5" ry="2.5" fill="none" stroke="#ffffff" stroke-width="1.2"/>
                <path d="M218.5 148 L218.5 158 C218.5 160 221.5 161.5 225 161.5 C228.5 161.5 231.5 160 231.5 158 L231.5 148" fill="none" stroke="#ffffff" stroke-width="1.2"/>
                <path d="M218.5 153 C218.5 155 221.5 156.5 225 156.5 C228.5 156.5 231.5 155 231.5 153" fill="none" stroke="#C8E019" stroke-width="1.2"/>
                <!-- Input Port -->
                <circle cx="209" cy="155" r="2.5" fill="#C8E019" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 5: Instant Communications / Slack / SMS (Bottom-Right) -->
            <g id="module-messaging">
                <circle cx="185" cy="225" r="22" stroke="#ffffff" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="4 3" fill="none"/>
                <circle cx="185" cy="225" r="17" fill="#ffffff" fill-opacity="0.05" stroke="#ffffff" stroke-width="1.5"/>
                <!-- Message Bubble Notification Glyph -->
                <path d="M178 221 C178 217.5 181 215 185 215 C189 215 192 217.5 192 221 C192 224 189 226.5 185 226.5 C184 226.5 183 226.3 182 226 L179 228 L179.5 225 C178.5 224 178 222.5 178 221 Z" fill="none" stroke="#C8E019" stroke-width="1.2" stroke-linejoin="round"/>
                <line x1="182" y1="220" x2="188" y2="220" stroke="#ffffff" stroke-width="1" stroke-linecap="round"/>
                <!-- Input Port -->
                <circle cx="173" cy="214" r="2.5" fill="#ffffff" stroke="#111827" stroke-width="0.75"/>
            </g>

            <!-- Module 6: AI Lead Scoring / Analytics (Bottom-Left) -->
            <g id="module-ai-scoring">
                <circle cx="65" cy="215" r="20" stroke="#C8E019" stroke-opacity="0.3" stroke-width="1.25" stroke-dasharray="2 3" fill="none"/>
                <circle cx="65" cy="215" r="16" fill="#ffffff" fill-opacity="0.05" stroke="#C8E019" stroke-width="1.5"/>
                <!-- Bar Chart & AI Spark Glyph -->
                <path d="M59 222 L59 217 M63 222 L63 213 M67 222 L67 215 M71 222 L71 210" stroke="#C8E019" stroke-width="1.3" stroke-linecap="round"/>
                <path d="M58 209 C60 209 61 207 61 205 C61 207 62 209 64 209 C62 209 61 211 61 213 C61 211 60 209 58 209 Z" fill="#ffffff"/>
                <!-- Input Port -->
                <circle cx="77" cy="204" r="2.5" fill="#C8E019" stroke="#111827" stroke-width="0.75"/>
            </g>
        </svg>
    </div>
    
    <div class="container position-relative z-1 hero-content py-5" style="color: #ffffff;">
        <span class="badge rounded-pill border border-secondary text-light mb-4 px-4 py-2" style="background: rgba(255,255,255,0.03); letter-spacing: 2px; font-size: 0.75rem; text-transform: uppercase;">
            <span style="color: #C8E019;" class="me-2">🚀</span> DIGITAL AGENCY FOR AMBITIOUS BRANDS
        </span>
        
        <h1 class="display-3 fw-bold mb-4" style="line-height: 1.15; letter-spacing: -1.5px; color: #ffffff;">
            We Build Systems That Work <br>
            <span style="color: var(--accent-neon);">While You Sleep.</span>
        </h1>
        
        <p class="lead mx-auto mb-5" style="max-width: 650px; font-size: 1.15rem; color: #9ca3af;">
            Automatixes designs, builds, and scales premium AI agents, automated workflows, and custom web applications for startups, SMBs, and enterprise teams globally.
        </p>

        <div class="d-flex justify-content-center gap-3 flex-wrap wow fadeInUp" data-wow-delay=".4s">
            <a href="contact" class="btn text-white rounded-pill px-5 py-3 fw-semibold d-flex align-items-center" style="background: linear-gradient(135deg, #0D6171, #C8E019); border: none; box-shadow: 0 10px 25px rgba(200, 224, 25,0.4); transition: transform 0.2s;">
                Start Your Project <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
            <a href="#portfolio-section" class="btn rounded-pill px-5 py-3 fw-semibold border" style="background: rgba(255,255,255,0.05); color: #ffffff; border-color: rgba(255,255,255,0.1); transition: background 0.2s;">
                View Our Work
            </a>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Start -->
<section id="about-section" class="about-section fix section-padding bg-warm-peach">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="about-image-wrapper wow fadeInLeft position-relative" data-wow-delay=".3s">
                    <img src="assets/img/about-team.jpg" alt="AI Automation Team at Automatixes" loading="lazy" class="img-fluid rounded-4 shadow-lg border border-secondary" style="object-fit: cover; width: 100%; aspect-ratio: 4/3; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content ps-lg-4">
                    <div class="section-title">
                        <div class="sub-title bg-color-2 wow fadeInUp mb-3">
                            <span>About Automatixes</span>
                        </div>
                        <h2 class="wow fadeInUp text-white fw-extrabold display-5 mb-4" data-wow-delay=".3s">
                            Who We Are
                        </h2>
                    </div>
                    <p class="mt-3 wow fadeInUp text-white-50 fs-5" data-wow-delay=".5s">
                        Automatixes is an AI automation agency that helps businesses automate lead follow-up, CRM syncing, and customer support using tools like n8n, Make, and GoHighLevel. We build custom AI agents and workflow automations for small and mid-sized businesses.
                    </p>
                    
                    <h5 class="fw-bold text-white mt-4 mb-3 wow fadeInUp" data-wow-delay=".3s">Who We Serve:</h5>
                    <div class="list-items wow fadeInUp" data-wow-delay=".4s">
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start fs-6 text-white-50">
                                <i class="fa-solid fa-house-chimney text-accent-brand me-3 mt-1"></i>
                                <span><strong class="text-white">Real Estate:</strong> Automated SMS replies, lead dispatch, and calendar booking.</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start fs-6 text-white-50">
                                <i class="fa-solid fa-graduation-cap text-accent-brand me-3 mt-1"></i>
                                <span><strong class="text-white">Coaches & Consultants:</strong> Automated onboarding, email nurture, and CRM updates.</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start fs-6 text-white-50">
                                <i class="fa-solid fa-cart-shopping text-accent-brand me-3 mt-1"></i>
                                <span><strong class="text-white">E-Commerce:</strong> Inventory sync, abandoned cart tracking, and orders notification.</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start fs-6 text-white-50">
                                <i class="fa-solid fa-wrench text-accent-brand me-3 mt-1"></i>
                                <span><strong class="text-white">Service Businesses:</strong> Auto-invoicing, feedback loops, and internal team alerts.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="main-button mt-4 wow fadeInUp" data-wow-delay=".5s">
                        <a href="about" class="btn btn-brand">
                            <span>Meet the Team</span>
                            <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Toss Away Physics Section Start -->
<section class="section toss-away" style="position: relative; overflow: hidden; padding: 0; background: var(--bg-surface-1, #0a0a0a); border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container toss-away-container" style="position: absolute; top: 60px; left: 50%; transform: translateX(-50%); z-index: 10; pointer-events: none; width: 100%;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="section__header text-center" style="margin-bottom: 0;">
                    <h2 class="title title-anim toss-away-title" style="color: #ffffff; font-size: clamp(1.8rem, 4.5vw, 3.4rem); font-weight: 800; line-height: 1.15; letter-spacing: -1px;">
                        SAY GOODBYE TO THESE<br><span style="color: var(--accent-neon, #C8E019);">BUSINESS HEADACHES</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div id="physics-container" style="width: 100%; height: 580px; position: relative; cursor: grab; z-index: 1; overflow: hidden;">
        <!-- Matter.js Canvas Injected Here -->
    </div>
</section>
<!-- Toss Away Physics Section End -->

<!-- Services Section Start -->
<section id="services-section" class="section-padding bg-surface text-white">
    <div class="container">
        <div class="text-center mb-5 max-w-700 mx-auto">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">SERVICES WE PROVIDE</span>
            <h2 class="display-5 fw-extrabold mb-3 text-white typewriter-anim">Our Core Offerings</h2>
            <p class="text-white-50 fs-5">We combine autonomous AI voice intelligence, smart agents, and workflow automations to scale your business.</p>
        </div>
        
        <!-- Row 1: Core Offerings (Dual High-Impact Cards) -->
        <div class="row g-4 justify-content-center">
            <!-- Core Offering 1: Autonomous AI Voice Agents -->
            <div class="col-lg-6 col-md-6">
                <div class="card-service-item h-100 d-flex flex-column justify-content-between wow fadeInUp" data-wow-delay=".2s" style="border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(18, 24, 38, 0.75); position: relative; overflow: hidden; border-radius: 20px;">
                    <div>
                        <div class="thumb mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <img src="assets/img/services/ai_agents.jpg" alt="Autonomous AI Voice Agents" class="img-fluid w-100" style="aspect-ratio: 16/9; object-fit: cover;">
                            <span class="badge position-absolute top-0 end-0 m-3 text-dark rounded-pill px-3 py-1.5 shadow fw-bold" style="font-size: 11px; background: #D4FF3D !important; color: #0a0e1a !important; letter-spacing: 0.5px; border: none;">
                                <i class="fa-solid fa-fire me-1" style="color: #0a0e1a !important;"></i> HIGH DEMAND
                            </span>
                        </div>
                        <div class="content p-2">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="fa-solid fa-microphone-lines" style="font-size: 1.3rem; color: #D4FF3D !important;"></i>
                                <span class="text-white-50 font-monospace small">Conversational Voice Engine</span>
                            </div>
                            <h3 class="mb-3"><a href="voice-agent" class="text-white text-decoration-none">Autonomous AI Voice Agents</a></h3>
                            <p class="text-white-50 mb-3">Human-like voice bots that handle customer inquiries, inbound call routing, qualify leads, and book appointments 24/7 with zero human lag.</p>
                            <ul class="list-unstyled text-white-50 small mb-4" style="line-height: 2;">
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Inbound &amp; Outbound Calling (&lt;500ms response)</li>
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Automated Appointment Booking &amp; Calendar Sync</li>
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Live CRM integration &amp; dynamic lead qualification</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 pt-0">
                        <a href="voice-agent" class="btn btn-sm btn-brand rounded-pill px-4 py-2 fw-bold text-nowrap d-inline-flex align-items-center gap-2 shadow text-dark" style="background: #D4FF3D !important; color: #0a0e1a !important; border: none;">
                            <span>Try Live Voice Demo</span>
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Core Offering 2: AI Automated Solutions -->
            <div class="col-lg-6 col-md-6">
                <div class="card-service-item h-100 d-flex flex-column justify-content-between wow fadeInUp" data-wow-delay=".4s" style="border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(18, 24, 38, 0.75); position: relative; overflow: hidden; border-radius: 20px;">
                    <div>
                        <div class="thumb mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <img src="assets/img/services/ai_automations.jpg" alt="AI Automated Solutions" class="img-fluid w-100" style="aspect-ratio: 16/9; object-fit: cover;">
                            <span class="badge position-absolute top-0 end-0 m-3 text-dark rounded-pill px-3 py-1.5 shadow fw-bold" style="font-size: 11px; background: #D4FF3D !important; color: #0a0e1a !important; letter-spacing: 0.5px; border: none;">
                                <i class="fa-solid fa-bolt me-1" style="color: #0a0e1a !important;"></i> CORE AGENTIC
                            </span>
                        </div>
                        <div class="content p-2">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="fa-solid fa-robot" style="font-size: 1.3rem; color: #D4FF3D !important;"></i>
                                <span class="text-white-50 font-monospace small">AI Agents &amp; Workflow Automations</span>
                            </div>
                            <h3 class="mb-3"><a href="ai-Agent-Automations" class="text-white text-decoration-none">AI Agent & Automations</a></h3>
                            <p class="text-white-50 mb-3">Smart digital agents and custom n8n / Make pipelines that automate support, lead triage, and sync your business software 24/7.</p>
                            <ul class="list-unstyled text-white-50 small mb-4" style="line-height: 2;">
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Multi-Platform Sync (WhatsApp, CRM, Email, Slack)</li>
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Custom Knowledge-Base Agents &amp; Data Extractors</li>
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>n8n, Make, GoHighLevel, Zapier &amp; API Workflows</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 pt-0">
                        <a href="ai-Agent-Automations" class="btn btn-sm btn-brand rounded-pill px-4 py-2 fw-bold text-nowrap d-inline-flex align-items-center gap-2 shadow text-dark" style="background: #D4FF3D !important; color: #0a0e1a !important; border: none;">
                            <span>Explore Automations</span>
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Offerings Separator -->
        <div class="text-center my-5 pt-3 wow fadeInUp" data-wow-delay=".5s">
            <span class="badge rounded-pill border border-secondary text-light mb-2 px-3 py-1.5" style="background: rgba(255,255,255,0.05); font-size: 11px; letter-spacing: 2px;">SPECIALIZED CAPABILITIES</span>
            <h4 class="text-white fw-bold font-monospace text-uppercase" style="font-size: 18px; letter-spacing: 1.5px;">Additional Services</h4>
            <div class="mx-auto bg-secondary bg-opacity-25 mt-2" style="width: 60px; height: 2px;"></div>
        </div>

        <!-- Row 2: Additional Services (AI Product Staging) -->
        <div class="row g-4 justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card-service-item h-100 d-flex flex-column justify-content-between wow fadeInUp" data-wow-delay=".6s" style="border: 1px solid rgba(255, 255, 255, 0.08); background: rgba(18, 24, 38, 0.75); position: relative; overflow: hidden; border-radius: 20px;">
                    <div>
                        <div class="thumb mb-4 rounded-4 overflow-hidden shadow-sm position-relative">
                            <img src="assets/img/services/product_shoot.jpg" alt="AI Product Staging and Visuals" class="img-fluid w-100" style="aspect-ratio: 16/9; object-fit: cover;">
                            <span class="badge position-absolute top-0 end-0 m-3 text-dark rounded-pill px-3 py-1.5 shadow fw-bold" style="font-size: 11px; background: #D4FF3D !important; color: #0a0e1a !important; letter-spacing: 0.5px; border: none;">
                                <i class="fa-solid fa-wand-magic-sparkles me-1" style="color: #0a0e1a !important;"></i> 3D STAGING
                            </span>
                        </div>
                        <div class="content p-2">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="fa-solid fa-wand-magic-sparkles" style="font-size: 1.3rem; color: #D4FF3D !important;"></i>
                                <span class="text-white-50 font-monospace small">AI Visuals &amp; Background Staging</span>
                            </div>
                            <h3 class="mb-3"><a href="product-shoot" class="text-white text-decoration-none">AI Product Staging &amp; Visuals</a></h3>
                            <p class="text-white-50 mb-3">Transform basic raw product shots into stunning, high-converting commercial assets with hyper-realistic AI background replacement, 3D lighting, and cinematic manipulation.</p>
                            <ul class="list-unstyled text-white-50 small mb-4" style="line-height: 2;">
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Photorealistic 3D AI Product Staging &amp; Shadowing</li>
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>Studio Lighting &amp; Cinematic Background Replacement</li>
                                <li><i class="fa-solid fa-check me-2" style="color: #D4FF3D !important;"></i>High-Converting E-Commerce Visual Assets (&lt;24h)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 pt-0">
                        <a href="product-shoot" class="btn btn-sm btn-brand rounded-pill px-4 py-2 fw-bold text-nowrap d-inline-flex align-items-center gap-2 shadow text-dark" style="background: #D4FF3D !important; color: #0a0e1a !important; border: none;">
                            <span>Explore Product Staging</span>
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Comparison Section Start -->
<section class="py-5 bg-dark text-white border-top border-light-subtle">
    <div class="container max-w-1000">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">CHOOSE YOUR SOLUTION</span>
            <h2 class="display-6 fw-extrabold mb-3 typewriter-anim">AI Agents vs AI Automations</h2>
            <p class="text-white-50 fs-5 mx-auto max-w-700">Not sure which service fits your business? Here is the core difference.</p>
        </div>

        <div class="row g-4 align-items-stretch">
            <!-- AI Agents Column -->
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="p-4 p-md-5 h-100 rounded-4 d-flex flex-column" style="background: linear-gradient(145deg, #0B4550, #0B4550); border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 15px 35px rgba(0,0,0,0.3);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 56px; height: 56px; font-size: 24px;">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-0 text-white">Autonomous AI Agents</h3>
                    </div>
                    <p class="text-accent-brand fw-bold mb-3 small text-uppercase font-monospace" style="letter-spacing: 1.5px;">The "Decision Makers"</p>
                    <p class="text-white-50 mb-4 fs-6 lh-lg flex-grow-1">Intelligent virtual assistants that understand context and make dynamic decisions. Ideal for handling customer conversations, qualifying leads, and providing 24/7 support without strict rule paths.</p>
                    <ul class="list-unstyled text-white-50 mb-5">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Natural language understanding</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Dynamic problem solving</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Custom trained on your knowledge base</span></li>
                    </ul>
                    <a href="ai-Agent-Automations" class="btn btn-outline-light btn-lg w-100 fw-bold border-2">Explore AI Agents <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- AI Automations Column -->
            <div class="col-md-6 wow fadeInRight" data-wow-delay=".3s">
                <div class="p-4 p-md-5 h-100 rounded-4 d-flex flex-column" style="background: linear-gradient(145deg, #0B4550, #0B4550); border: 1px solid rgba(255,255,255,0.05); box-shadow: 0 15px 35px rgba(0,0,0,0.3);">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center me-3 flex-shrink-0" style="width: 56px; height: 56px; font-size: 24px;">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <h3 class="h4 fw-bold mb-0 text-white">End-to-End Automations</h3>
                    </div>
                    <p class="text-accent-brand fw-bold mb-3 small text-uppercase font-monospace" style="letter-spacing: 1.5px;">The "Task Doers"</p>
                    <p class="text-white-50 mb-4 fs-6 lh-lg flex-grow-1">Strict, rule-based workflows that connect your existing software stack. Best for moving data, syncing CRMs, triggering emails, and eliminating manual copy-paste tasks instantly.</p>
                    <ul class="list-unstyled text-white-50 mb-5">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>Rule-based exact execution</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>API & Webhook integrations</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-success mt-1 me-3"></i> <span>100% predictable outcomes</span></li>
                    </ul>
                    <a href="ai-Agent-Automations" class="btn btn-outline-light btn-lg w-100 fw-bold border-2">Explore Automations <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AI Comparison Section End -->

<!-- Case Study & Demo Section Start -->
<section id="case-study-section" class="py-5 text-white position-relative overflow-hidden" style="background: linear-gradient(180deg, #070a12 0%, #0c1222 50%, #070a12 100%); border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <!-- Ambient Atmospheric Glows -->
    <div class="position-absolute rounded-circle pointer-events-none" style="background: radial-gradient(circle, rgba(200, 224, 25, 0.12) 0%, rgba(0,0,0,0) 70%); width: 600px; height: 600px; top: 5%; right: -150px; filter: blur(90px); z-index: 0;"></div>
    <div class="position-absolute rounded-circle pointer-events-none" style="background: radial-gradient(circle, rgba(56, 189, 248, 0.08) 0%, rgba(0,0,0,0) 70%); width: 500px; height: 500px; bottom: 10%; left: -100px; filter: blur(80px); z-index: 0;"></div>

    <div class="container position-relative" style="z-index: 1;">
        <!-- Header / Eyebrow -->
        <div class="text-center mb-5 max-w-800 mx-auto">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-3" style="background: rgba(200, 224, 25, 0.08); border: 1px solid rgba(200, 224, 25, 0.25); box-shadow: 0 0 20px rgba(200, 224, 25, 0.1);">
                <span class="badge rounded-pill px-2 py-0.5" style="background: #C8E019; color: #000; font-size: 0.7rem; font-weight: 800; letter-spacing: 0.05em;">CASE STUDY</span>
                <span class="text-white small fw-bold" style="font-size: 0.85rem;"><i class="fa-solid fa-bolt me-1 text-accent-neon"></i> n8n Autonomous Lead Recovery &amp; Verification</span>
            </div>
            <h2 class="display-5 fw-extrabold text-white mb-3" style="letter-spacing: -0.03em;">
                How B2B Agencies Recover <span style="background: linear-gradient(135deg, #FFFFFF 30%, #C8E019 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">30%+ Lost Pipeline</span>
            </h2>
            <p class="text-white-50 fs-5 mx-auto" style="max-width: 680px; line-height: 1.6;">
                Most outbound and inbound campaigns bleed revenue due to slow response times and dirty CRM data. Here is the exact production n8n engine we deploy to capture, clean, and verify leads in real time.
            </p>
        </div>

        <!-- Problem vs Solution Breakdown (Bento Style) -->
        <div class="row g-4 mb-5">
            <!-- Problem Card -->
            <div class="col-lg-6">
                <div class="p-4 p-md-4 rounded-4 h-100" style="background: rgba(239, 68, 68, 0.03); border: 1px solid rgba(239, 68, 68, 0.2); box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom border-danger border-opacity-25">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge rounded-pill px-3 py-1.5 fw-bold text-white shadow-sm" style="background: #ef4444; color: #ffffff !important; letter-spacing: 0.5px; border: none; font-size: 11px;">
                                <i class="fa-solid fa-triangle-exclamation me-1" style="color: #ffffff !important;"></i> THE BOTTLENECK
                            </span>
                            <h4 class="h5 fw-bold text-white mb-0">The Leaky Pipeline</h4>
                        </div>
                        <span class="small font-monospace fw-bold" style="color: #f87171 !important;"><i class="fa-solid fa-arrow-trend-down me-1"></i>Lost ROI</span>
                    </div>
                    
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <li class="d-flex align-items-start gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); width: 28px; height: 28px;">
                                <i class="fa-solid fa-hourglass-half" style="font-size: 13px;"></i>
                            </div>
                            <div>
                                <strong class="text-white d-block">Speed-to-Lead Drop-off (Leads Go Ice-Cold)</strong>
                                <span class="text-white-50 small">78% of B2B buyers purchase from the vendor who replies first. Leaving inquiries or replies sitting for 15+ minutes causes lead response rates to drop by up to 391%.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); width: 28px; height: 28px;">
                                <i class="fa-solid fa-envelope-circle-check" style="font-size: 13px;"></i>
                            </div>
                            <div>
                                <strong class="text-white d-block">High Bounce Rates &amp; Burned Mailboxes</strong>
                                <span class="text-white-50 small">Scraped raw leads contain typos, non-existent corporate domains, and dead inboxes. Blasting unchecked data wrecks domain reputation and triggers spam filters.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); width: 28px; height: 28px;">
                                <i class="fa-solid fa-table-list" style="font-size: 13px;"></i>
                            </div>
                            <div>
                                <strong class="text-white d-block">Manual CSV Scrubbing Drains SDR Hours</strong>
                                <span class="text-white-50 small">Sales reps waste 10–14 hours per week manually formatting strings, stripping "LLC/Inc" suffixes, and cross-checking records instead of taking calls and closing.</span>
                            </div>
                        </li>
                    </ul>

                    <div class="p-3 rounded-3" style="background: rgba(239, 68, 68, 0.08); border: 1px dashed rgba(239, 68, 68, 0.3);">
                        <span class="fw-bold small" style="color: #f87171 !important;"><i class="fa-solid fa-xmark me-1"></i> Net Impact:</span>
                        <span class="text-white small ms-1">Agencies lose 25–40% of potentially closed-won revenue simply due to delayed response times and bad data hygiene.</span>
                    </div>
                </div>
            </div>

            <!-- Solution Card -->
            <div class="col-lg-6">
                <div class="p-4 p-md-4 rounded-4 h-100" style="background: rgba(200, 224, 25, 0.03); border: 1px solid rgba(200, 224, 25, 0.25); box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom border-light border-opacity-10">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge rounded-pill px-3 py-1.5 text-dark fw-bold shadow-sm" style="background: #D4FF3D; color: #0a0e1a !important; letter-spacing: 0.5px; border: none; font-size: 11px;">
                                <i class="fa-solid fa-check-double me-1" style="color: #0a0e1a !important;"></i> OUR AUTOMATION
                            </span>
                            <h4 class="h5 fw-bold text-white mb-0">Autonomous n8n Recovery Engine</h4>
                        </div>
                        <span class="small font-monospace fw-bold" style="color: #D4FF3D !important;"><i class="fa-solid fa-bolt me-1"></i>Sub-60s Action</span>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                        <li class="d-flex align-items-start gap-3">
                            <div class="rounded-circle text-dark d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="background: #D4FF3D; color: #0a0e1a !important; width: 28px; height: 28px;">
                                <i class="fa-solid fa-bolt-lightning" style="font-size: 13px;"></i>
                            </div>
                            <div>
                                <strong class="text-white d-block">Instant Trigger &amp; Sub-60s Speed-to-Lead</strong>
                                <span class="text-white-50 small">Webhooks and scheduled polling monitor incoming form fills and inbox replies 24/7. When a prospect engages, the pipeline catches it within seconds before they go cold.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="rounded-circle text-dark d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="background: #D4FF3D; color: #0a0e1a !important; width: 28px; height: 28px;">
                                <i class="fa-solid fa-network-wired" style="font-size: 13px;"></i>
                            </div>
                            <div>
                                <strong class="text-white d-block">Autonomous Cloudflare DNS MX Validation</strong>
                                <span class="text-white-50 small">The workflow queries live DNS servers to verify mail exchange records on the fly, auto-flagging invalid mailboxes and protecting sender reputation with zero paid API costs.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="rounded-circle text-dark d-flex align-items-center justify-content-center flex-shrink-0 mt-1" style="background: #D4FF3D; color: #0a0e1a !important; width: 28px; height: 28px;">
                                <i class="fa-solid fa-wand-magic-sparkles" style="font-size: 13px;"></i>
                            </div>
                            <div>
                                <strong class="text-white d-block">JavaScript Data Sanitization &amp; CRM Sync</strong>
                                <span class="text-white-50 small">Embedded JavaScript cleans names to proper Title Case, strips entity tags (LLC, Inc, Corp), and appends clean data directly into Google Sheets, Airtable, or your CRM.</span>
                            </div>
                        </li>
                    </ul>

                    <div class="p-3 rounded-3" style="background: rgba(200, 224, 25, 0.08); border: 1px dashed rgba(200, 224, 25, 0.35);">
                        <span class="fw-bold small" style="color: #D4FF3D !important;"><i class="fa-solid fa-circle-check me-1"></i> Measurable Result:</span>
                        <span class="text-white small ms-1">Zero dropped leads, 99.2% verified deliverability rate, and 12+ hours saved every week per account.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workflow Visual Demo & Video Player Card -->
        <div class="card rounded-4 overflow-hidden mb-5" style="background: #0d1322; border: 1px solid rgba(200, 224, 25, 0.2); box-shadow: 0 20px 40px rgba(0,0,0,0.4);">
            <!-- Window Title Bar / Tab Bar -->
            <div class="px-4 py-3 border-bottom d-flex flex-wrap align-items-center justify-content-between gap-3" style="background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07) !important;">
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex align-items-center gap-1.5">
                        <span class="rounded-circle d-inline-block" style="width: 11px; height: 11px; background: #ff5f56;"></span>
                        <span class="rounded-circle d-inline-block" style="width: 11px; height: 11px; background: #ffbd2e;"></span>
                        <span class="rounded-circle d-inline-block" style="width: 11px; height: 11px; background: #27c93f;"></span>
                    </div>
                    <span class="text-white-50 small font-monospace ms-2 d-none d-sm-inline">lead-recovery-workflow.n8n · Production v2.4</span>
                </div>

                <!-- View Switcher Tabs -->
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-sm px-3 py-1.5 rounded-pill fw-semibold active case-study-tab-btn" id="tabBtnArchitecture" onclick="switchCaseStudyTab('architecture')" style="font-size: 0.8rem; background: #C8E019; color: #000; border: 1px solid #C8E019;">
                        <i class="fa-solid fa-diagram-project me-1.5"></i> Workflow Blueprint
                    </button>
                    <button type="button" class="btn btn-sm px-3 py-1.5 rounded-pill fw-semibold case-study-tab-btn" id="tabBtnVideo" onclick="switchCaseStudyTab('video')" style="font-size: 0.8rem; background: rgba(255,255,255,0.05); color: #cbd5e1; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-circle-play me-1.5"></i> Video Walkthrough
                    </button>
                    <a href="https://screenrec.com/share/7SxeCZsImJ" target="_blank" rel="noopener noreferrer" class="btn btn-sm px-3 py-1.5 rounded-pill fw-semibold d-none d-md-inline-flex align-items-center gap-1 text-white" style="font-size: 0.8rem; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <span>ScreenRec HD</span>
                        <i class="fa-solid fa-arrow-up-right-from-square small"></i>
                    </a>
                </div>
            </div>

            <!-- Tab Content 1: Architecture Blueprint (Image) -->
            <div id="tabContentArchitecture" class="p-3 p-md-4 text-center">
                <div class="position-relative rounded-3 overflow-hidden" style="border: 1px solid rgba(255,255,255,0.08); background: #07090e; max-height: 540px;">
                    <img src="assets/media/n8n/n8n-workflow.webp" alt="n8n Lead Cleaner and Recovery Production Workflow" class="img-fluid w-100" style="object-fit: cover; object-position: center; cursor: zoom-in;" onclick="openWorkflowModal()" title="Click to view full blueprint">
                    
                    <div class="position-absolute bottom-0 start-0 end-0 p-3 d-flex flex-wrap align-items-center justify-content-between gap-2" style="background: linear-gradient(to top, rgba(7,9,14,0.95) 0%, rgba(7,9,14,0) 100%);">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-dark bg-opacity-75 text-accent-brand border border-secondary border-opacity-50 px-2.5 py-1">
                                <i class="fa-solid fa-code-branch me-1"></i> 6 Production Nodes
                            </span>
                            <span class="text-white small d-none d-sm-inline">Click diagram to expand full view</span>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-light rounded-pill px-3 py-1" onclick="openWorkflowModal()">
                            <i class="fa-solid fa-expand me-1"></i> Fullscreen Blueprint
                        </button>
                    </div>
                </div>

                <!-- 6 Step Pipeline Flow Badges -->
                <div class="row g-2 mt-3 pt-2 text-start">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="p-2.5 rounded-3 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="text-accent-brand font-monospace small fw-bold mb-1">01 • TRIGGER</div>
                            <div class="text-white small fw-semibold">Webhook / Poll</div>
                            <div class="text-white-50" style="font-size: 0.72rem;">Detects new reply or form entry</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="p-2.5 rounded-3 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="text-accent-brand font-monospace small fw-bold mb-1">02 • INGEST</div>
                            <div class="text-white small fw-semibold">Read Google Sheet</div>
                            <div class="text-white-50" style="font-size: 0.72rem;">Streams raw prospect data</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="p-2.5 rounded-3 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="text-accent-brand font-monospace small fw-bold mb-1">03 • CLEANSE</div>
                            <div class="text-white small fw-semibold">Format &amp; Suffixes</div>
                            <div class="text-white-50" style="font-size: 0.72rem;">Removes LLC/Inc, fixes casing</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="p-2.5 rounded-3 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="text-accent-brand font-monospace small fw-bold mb-1">04 • DNS LOOKUP</div>
                            <div class="text-white small fw-semibold">Cloudflare MX Check</div>
                            <div class="text-white-50" style="font-size: 0.72rem;">Validates real mail servers</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="p-2.5 rounded-3 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="text-accent-brand font-monospace small fw-bold mb-1">05 • EVALUATE</div>
                            <div class="text-white small fw-semibold">Delivery Logic Gate</div>
                            <div class="text-white-50" style="font-size: 0.72rem;">Filters valid vs dead records</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="p-2.5 rounded-3 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.06);">
                            <div class="text-accent-brand font-monospace small fw-bold mb-1">06 • SYNC &amp; ROUTE</div>
                            <div class="text-white small fw-semibold">Append &amp; Alert</div>
                            <div class="text-white-50" style="font-size: 0.72rem;">Pushes to clean sheet &amp; Slack</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Content 2: Live Video Walkthrough -->
            <div id="tabContentVideo" class="p-3 p-md-4 d-none">
                <div class="rounded-3 overflow-hidden position-relative" style="background: #000; border: 1px solid rgba(255,255,255,0.1); max-height: 560px;">
                    <video id="caseStudyVideoPlayer" class="w-100" controls preload="metadata" poster="assets/media/n8n/n8n-workflow.webp" style="max-height: 520px; object-fit: contain; outline: none; display: block; margin: 0 auto;">
                        <source src="assets/media/n8n/n8n-demo.mp4" type="video/mp4">
                        Your browser does not support HTML5 video. You can view the demo directly on <a href="https://screenrec.com/share/7SxeCZsImJ" target="_blank" class="text-accent-brand">ScreenRec</a>.
                    </video>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-3 pt-2">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success bg-opacity-20 text-success border border-success border-opacity-50 px-2.5 py-1">
                            <i class="fa-solid fa-play me-1"></i> Live Execution Demo
                        </span>
                        <span class="text-white-50 small">Watch how the workflow handles live lead ingestion and verification end-to-end.</span>
                    </div>
                    <a href="https://screenrec.com/share/7SxeCZsImJ" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-light rounded-pill px-3 py-1.5">
                        <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> Open in ScreenRec
                    </a>
                </div>
            </div>
        </div>

        <!-- Verified Impact Metric Counters -->
        <div class="row g-3 text-center mb-5">
            <div class="col-6 col-md-3">
                <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="display-6 fw-extrabold text-accent-brand font-monospace mb-1">&lt; 60s</div>
                    <div class="text-white small fw-bold mb-1">Speed-to-Lead</div>
                    <div class="text-white-50" style="font-size: 0.75rem;">From initial form reply to verified CRM sync</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="display-6 fw-extrabold text-white font-monospace mb-1">99.2%</div>
                    <div class="text-white small fw-bold mb-1">Deliverability Score</div>
                    <div class="text-white-50" style="font-size: 0.75rem;">Real-time MX verification stops sender penalties</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="display-6 fw-extrabold font-monospace mb-1" style="color: #38bdf8;">+34%</div>
                    <div class="text-white small fw-bold mb-1">Pipeline Recovery</div>
                    <div class="text-white-50" style="font-size: 0.75rem;">Inbound leads recaptured before going cold</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06);">
                    <div class="display-6 fw-extrabold font-monospace mb-1" style="color: #4ade80;">12+ hrs</div>
                    <div class="text-white small fw-bold mb-1">Saved Per SDR/Wk</div>
                    <div class="text-white-50" style="font-size: 0.75rem;">Manual copy-pasting &amp; sheet cleaning removed</div>
                </div>
            </div>
        </div>

        <!-- High-Impact CTA Banner -->
        <div class="p-4 p-md-5 rounded-4 text-center position-relative overflow-hidden" style="background: radial-gradient(ellipse at center, rgba(200, 224, 25, 0.12) 0%, rgba(15, 23, 42, 0.95) 75%), #0d1424; border: 1px solid rgba(200, 224, 25, 0.35); box-shadow: 0 0 50px rgba(200, 224, 25, 0.1);">
            <div class="position-relative" style="z-index: 2;">
                <div class="badge rounded-pill px-3 py-1.5 mb-3" style="background: rgba(200, 224, 25, 0.15); color: #C8E019; border: 1px solid rgba(200, 224, 25, 0.3); font-size: 0.75rem; letter-spacing: 0.5px;">
                    <i class="fa-solid fa-clock-rotate-left me-1"></i> ZERO PITCH · 100% TECHNICAL VALUE
                </div>
                <h3 class="display-6 fw-extrabold text-white mb-3">
                    Want to plug the leaks in your agency's lead pipeline?
                </h3>
                <p class="lead text-white-50 mx-auto mb-4" style="max-width: 640px; font-size: 1.1rem; line-height: 1.6;">
                    We will inspect your current lead intake, CRM connections, and reply speed — and outline the exact n8n or Make.com blueprint to automate it completely.
                </p>
                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center gap-3">
                    <a href="#contact-section" class="btn btn-brand btn-lg rounded-pill px-5 py-3 fw-extrabold text-dark shadow d-inline-flex align-items-center gap-2" style="background: #C8E019; border: none; font-size: 1.05rem;">
                        <i class="fa-solid fa-calendar-check fs-5"></i>
                        <span>Book a 15-min workflow audit</span>
                        <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
                <div class="mt-3 text-white-50 small">
                    <i class="fa-solid fa-shield-halved text-accent-neon me-1"></i> Free 1-on-1 audit with an automation engineer. No high-pressure sales.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fullscreen Blueprint Modal -->
<div class="modal fade" id="workflowModal" tabindex="-1" aria-labelledby="workflowModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content text-white" style="background: #0b0f19; border: 1px solid rgba(200, 224, 25, 0.3); box-shadow: 0 0 50px rgba(0,0,0,0.8);">
            <div class="modal-header border-bottom border-light border-opacity-10 py-3 px-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge rounded-pill px-2.5 py-1 text-dark fw-bold" style="background: #C8E019;">n8n Production Canvas</span>
                    <h5 class="modal-title h6 mb-0 text-white" id="workflowModalLabel">Lead Cleaner &amp; Email Validator Workflow</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 text-center" style="background: #07090e; overflow-x: auto;">
                <img src="assets/media/n8n/n8n-workflow.webp" alt="Full Blueprint" class="img-fluid rounded-2" style="min-width: 100%; object-fit: contain;">
            </div>
            <div class="modal-footer border-top border-light border-opacity-10 py-2.5 px-4 d-flex justify-content-between">
                <span class="text-white-50 small">6 active nodes: Manual/Schedule Trigger &rarr; Google Sheet Ingestion &rarr; Regex Cleanse &rarr; Cloudflare DNS MX &rarr; Validation Gate &rarr; Clean Sheet Sync</span>
                <button type="button" class="btn btn-sm btn-secondary rounded-pill px-3" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Case Study Interactive Script -->
<script>
function switchCaseStudyTab(tab) {
    var archTab = document.getElementById('tabContentArchitecture');
    var vidTab = document.getElementById('tabContentVideo');
    var archBtn = document.getElementById('tabBtnArchitecture');
    var vidBtn = document.getElementById('tabBtnVideo');
    var videoPlayer = document.getElementById('caseStudyVideoPlayer');

    if (tab === 'architecture') {
        archTab.classList.remove('d-none');
        vidTab.classList.add('d-none');
        archBtn.style.background = '#C8E019';
        archBtn.style.color = '#000';
        archBtn.style.borderColor = '#C8E019';
        vidBtn.style.background = 'rgba(255,255,255,0.05)';
        vidBtn.style.color = '#cbd5e1';
        vidBtn.style.borderColor = 'rgba(255,255,255,0.1)';
        if (videoPlayer) videoPlayer.pause();
    } else {
        archTab.classList.add('d-none');
        vidTab.classList.remove('d-none');
        vidBtn.style.background = '#C8E019';
        vidBtn.style.color = '#000';
        vidBtn.style.borderColor = '#C8E019';
        archBtn.style.background = 'rgba(255,255,255,0.05)';
        archBtn.style.color = '#cbd5e1';
        archBtn.style.borderColor = 'rgba(255,255,255,0.1)';
    }
}

function openWorkflowModal() {
    var modalEl = document.getElementById('workflowModal');
    if (modalEl && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        var modal = new bootstrap.Modal(modalEl);
        modal.show();
    } else if (modalEl) {
        modalEl.classList.add('show');
        modalEl.style.display = 'block';
        document.body.classList.add('modal-open');
    }
}
</script>
<!-- Case Study & Demo Section End -->

<!-- =========================================================================
     SAAS TOOLS & PRODUCTS SHOWCASE SECTION (INTERACTIVE SLIDES & BUTTONS)
     ========================================================================= -->
<section id="saas-tools" class="section-padding position-relative text-white border-top border-light-subtle overflow-hidden" style="background: radial-gradient(circle at 50% 0%, #0c1427 0%, #070a12 100%);">
    <!-- Atmospheric Glow Effects -->
    <div class="position-absolute pointer-events-none rounded-circle" style="top: -120px; left: 15%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(200, 224, 25, 0.08) 0%, rgba(0,0,0,0) 70%); filter: blur(90px); z-index: 0;"></div>
    <div class="position-absolute pointer-events-none rounded-circle" style="bottom: -100px; right: 10%; width: 550px; height: 550px; background: radial-gradient(circle, rgba(56, 189, 248, 0.08) 0%, rgba(0,0,0,0) 70%); filter: blur(90px); z-index: 0;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <!-- Header & Category Badge -->
        <div class="text-center max-w-850 mx-auto mb-5">
            <span class="badge bg-surface-2 border border-light-subtle text-accent-neon font-monospace px-3 py-2 mb-3">
                <i class="fa-solid fa-layer-group me-1.5"></i> PROPRIETARY SAAS SUITE
            </span>
            <h2 class="display-5 fw-bold text-white mb-3">
                Production Micro-SaaS <span style="color: var(--accent-neon);">Tools & Applications</span>
            </h2>
            <p class="fs-5 text-secondary">
                Explore live, battle-tested SaaS tools engineered and deployed by Automatixes. Fast, private, and built with zero bloat.
            </p>

            <!-- Slide Quick Selector Tabs (Buttons) -->
            <div class="d-inline-flex flex-wrap justify-content-center gap-2 p-1.5 rounded-pill bg-dark border border-secondary border-opacity-25 mt-3" id="saasSlideTabs">
                <button type="button" class="btn btn-sm rounded-pill px-3 py-1.5 fw-semibold saas-tab-btn active" data-slide-index="0">
                    <i class="fa-solid fa-file-invoice-dollar text-success me-1.5"></i>Invoice Maker
                </button>
                <button type="button" class="btn btn-sm rounded-pill px-3 py-1.5 fw-semibold saas-tab-btn text-white-50" data-slide-index="1">
                    <i class="fa-solid fa-qrcode text-info me-1.5"></i>QR Studio
                </button>
                <button type="button" class="btn btn-sm rounded-pill px-3 py-1.5 fw-semibold saas-tab-btn text-white-50" data-slide-index="2">
                    <i class="fa-solid fa-wand-magic-sparkles text-accent-neon me-1.5"></i>AI Upscaler 4K
                </button>
            </div>
        </div>

        <!-- Carousel / Slides Container -->
        <div class="position-relative" id="saasSliderContainer">
            
            <!-- SLIDE 1: AutomatixInvoice -->
            <div class="saas-slide active" data-slide="0">
                <div class="card card-glass rounded-4 p-4 p-lg-5 border border-light-subtle shadow-lg">
                    <div class="row g-4 align-items-center">
                        <!-- Left: Info & Action Buttons -->
                        <div class="col-lg-6 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <span class="badge rounded-pill bg-success bg-opacity-20 text-success border border-success border-opacity-25 px-3 py-1 font-monospace">
                                        <i class="fa-solid fa-bolt me-1"></i> LIVE APPLICATION
                                    </span>
                                    <span class="badge rounded-pill bg-dark border border-light-subtle text-white-50 px-2.5 py-1 font-monospace">
                                        ZERO SIGN-UP REQUIRED
                                    </span>
                                </div>
                                <h3 class="display-6 fw-bold text-white mb-3">
                                    AutomatixInvoice <br>
                                    <span style="color: #25D366;">Instant Financial Ledger</span>
                                </h3>
                                <p class="text-secondary leading-relaxed mb-4">
                                    Generate crisp, professional A4 invoices in seconds. Features real-time client-side subtotal math, line-item tax calculation, custom currency symbol rotation, and automated vector PDF generation.
                                </p>

                                <div class="row g-3 mb-4">
                                    <div class="col-sm-6">
                                        <div class="p-2.5 rounded-3 bg-surface-2 border border-light-subtle">
                                            <div class="text-accent-neon fw-bold small"><i class="fa-solid fa-shield-halved me-1.5"></i> 100% Private</div>
                                            <div class="text-white-50 small" style="font-size: 11px;">Zero data saved on external servers</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2.5 rounded-3 bg-surface-2 border border-light-subtle">
                                            <div class="text-success fw-bold small"><i class="fa-solid fa-file-pdf me-1.5"></i> Vector PDF</div>
                                            <div class="text-white-50 small" style="font-size: 11px;">Ultra-sharp printable output</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap gap-2.5 pt-3 border-top border-light-subtle">
                                <a href="https://invoicemaker.automatixes.com" target="_blank" rel="noopener" class="btn btn-brand rounded-pill px-4 py-2.5 fw-bold d-inline-flex align-items-center gap-2 shadow">
                                    <i class="fa-solid fa-rocket"></i>
                                    <span>Launch Invoice Maker (Live)</span>
                                </a>
                                <a href="invoice-maker" class="btn btn-outline-light rounded-pill px-3.5 py-2.5 small fw-semibold d-inline-flex align-items-center gap-1.5">
                                    <i class="fa-solid fa-eye text-accent-neon"></i>
                                    <span>Open In-App</span>
                                </a>
                            </div>
                        </div>

                        <!-- Right: Visual Interactive Card Mockup -->
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4 bg-dark bg-opacity-75 border border-secondary border-opacity-25 position-relative shadow-sm" style="background: linear-gradient(145deg, #0e172a 0%, #0a0f1d 100%);">
                                <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-secondary border-opacity-25">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="rounded-circle bg-danger d-inline-block" style="width: 10px; height: 10px;"></span>
                                        <span class="rounded-circle bg-warning d-inline-block" style="width: 10px; height: 10px;"></span>
                                        <span class="rounded-circle bg-success d-inline-block" style="width: 10px; height: 10px;"></span>
                                        <span class="text-white-50 font-monospace ms-2 small">invoice-engine.automatixes</span>
                                    </div>
                                    <span class="badge bg-success bg-opacity-25 text-success font-monospace small">CALC: OK</span>
                                </div>
                                <div class="p-3 rounded-3 bg-surface-2 border border-light-subtle mb-3">
                                    <div class="d-flex justify-content-between text-white-50 small mb-1">
                                        <span>Client Bill To:</span>
                                        <span class="text-white fw-semibold">Acme Global Tech LLC</span>
                                    </div>
                                    <div class="d-flex justify-content-between text-white-50 small mb-1">
                                        <span>Service Scope:</span>
                                        <span class="text-accent-neon fw-semibold">Autonomous AI Agent (Q1)</span>
                                    </div>
                                    <div class="d-flex justify-content-between text-white-50 small">
                                        <span>Invoice Status:</span>
                                        <span class="badge bg-brand-translucent text-accent-brand">PAID // RECONCILED</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-3 rounded-3 bg-dark border border-light-subtle">
                                    <span class="text-secondary small">Total Balance:</span>
                                    <span class="fs-4 fw-bold text-white font-monospace">$4,850.00 <span class="text-success fs-6">USD</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2: AutomatixQR Studio -->
            <div class="saas-slide d-none" data-slide="1">
                <div class="card card-glass rounded-4 p-4 p-lg-5 border border-light-subtle shadow-lg">
                    <div class="row g-4 align-items-center">
                        <!-- Left: Info & Action Buttons -->
                        <div class="col-lg-6 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <span class="badge rounded-pill bg-info bg-opacity-20 text-info border border-info border-opacity-25 px-3 py-1 font-monospace">
                                        <i class="fa-solid fa-qrcode me-1"></i> ENTERPRISE TOOL
                                    </span>
                                    <span class="badge rounded-pill bg-dark border border-light-subtle text-white-50 px-2.5 py-1 font-monospace">
                                        VECTOR SVG / EPS
                                    </span>
                                </div>
                                <h3 class="display-6 fw-bold text-white mb-3">
                                    AutomatixQR <br>
                                    <span style="color: #38bdf8;">Dynamic Brand Matrix</span>
                                </h3>
                                <p class="text-secondary leading-relaxed mb-4">
                                    Enterprise QR generation with high-resolution vector precision. Embed your company logo, customize foreground and background hex gradients, and configure dynamic destination URLs with live visit telemetry.
                                </p>

                                <div class="row g-3 mb-4">
                                    <div class="col-sm-6">
                                        <div class="p-2.5 rounded-3 bg-surface-2 border border-light-subtle">
                                            <div class="text-info fw-bold small"><i class="fa-solid fa-palette me-1.5"></i> Custom Branding</div>
                                            <div class="text-white-50 small" style="font-size: 11px;">Hex palettes & embedded logos</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2.5 rounded-3 bg-surface-2 border border-light-subtle">
                                            <div class="text-accent-neon fw-bold small"><i class="fa-solid fa-chart-simple me-1.5"></i> Dynamic Links</div>
                                            <div class="text-white-50 small" style="font-size: 11px;">Change destination without reprinting</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap gap-2.5 pt-3 border-top border-light-subtle">
                                <a href="https://qrcode.automatixes.com" target="_blank" rel="noopener" class="btn btn-brand rounded-pill px-4 py-2.5 fw-bold d-inline-flex align-items-center gap-2 shadow">
                                    <i class="fa-solid fa-qrcode"></i>
                                    <span>Launch QR Studio (Live)</span>
                                </a>
                                <a href="https://wa.me/923366920141?text=Hi!%20I%20want%20to%20build%20a%20custom%20SaaS%20product%20like%20AutomatixQR." target="_blank" rel="noopener" class="btn btn-outline-light rounded-pill px-3.5 py-2.5 small fw-semibold d-inline-flex align-items-center gap-1.5">
                                    <i class="fa-brands fa-whatsapp text-success"></i>
                                    <span>Build Custom SaaS</span>
                                </a>
                            </div>
                        </div>

                        <!-- Right: Visual Interactive Card Mockup -->
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4 bg-dark bg-opacity-75 border border-secondary border-opacity-25 position-relative shadow-sm text-center" style="background: linear-gradient(145deg, #0a172c 0%, #070e1b 100%);">
                                <div class="d-inline-flex p-3 rounded-4 bg-white shadow-lg mb-3" style="width: 170px; height: 170px; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-qrcode text-dark" style="font-size: 130px;"></i>
                                </div>
                                <div class="d-flex justify-content-center gap-2 mt-2">
                                    <span class="badge bg-dark border border-info text-info font-monospace small">SVG Vector</span>
                                    <span class="badge bg-dark border border-light-subtle text-white-50 font-monospace small">PNG 300 DPI</span>
                                    <span class="badge bg-dark border border-light-subtle text-white-50 font-monospace small">EPS Print</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3: AI Image Upscaler 4K -->
            <div class="saas-slide d-none" data-slide="2">
                <div class="card card-glass rounded-4 p-4 p-lg-5 border border-light-subtle shadow-lg">
                    <div class="row g-4 align-items-center">
                        <!-- Left: Info & Action Buttons -->
                        <div class="col-lg-6 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <span class="badge rounded-pill bg-warning bg-opacity-20 text-warning border border-warning border-opacity-25 px-3 py-1 font-monospace">
                                        <i class="fa-solid fa-wand-magic-sparkles me-1"></i> NEURAL ENGINE
                                    </span>
                                    <span class="badge rounded-pill bg-dark border border-light-subtle text-white-50 px-2.5 py-1 font-monospace">
                                        4X SUPER-RESOLUTION
                                    </span>
                                </div>
                                <h3 class="display-6 fw-bold text-white mb-3">
                                    AI Image Upscaler <br>
                                    <span style="color: var(--accent-neon);">4K Commercial Engine</span>
                                </h3>
                                <p class="text-secondary leading-relaxed mb-4">
                                    Deep learning super-resolution for commercial photography and e-commerce listings. Reconstructs missing micro-textures, eliminates JPEG blur artifacts, and enhances resolution up to 4x without pixelation.
                                </p>

                                <div class="row g-3 mb-4">
                                    <div class="col-sm-6">
                                        <div class="p-2.5 rounded-3 bg-surface-2 border border-light-subtle">
                                            <div class="text-accent-neon fw-bold small"><i class="fa-solid fa-image me-1.5"></i> 4x Magnification</div>
                                            <div class="text-white-50 small" style="font-size: 11px;">720p &rarr; Ultra HD 4K</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2.5 rounded-3 bg-surface-2 border border-light-subtle">
                                            <div class="text-warning fw-bold small"><i class="fa-solid fa-bag-shopping me-1.5"></i> E-Commerce Ready</div>
                                            <div class="text-white-50 small" style="font-size: 11px;">Amazon & Shopify compliant</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap gap-2.5 pt-3 border-top border-light-subtle">
                                <a href="https://upscaler.automatixes.com" target="_blank" rel="noopener" class="btn btn-brand rounded-pill px-4 py-2.5 fw-bold d-inline-flex align-items-center gap-2 shadow">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                    <span>Launch AI Upscaler (Live)</span>
                                </a>
                                <a href="product-shoot" class="btn btn-outline-light rounded-pill px-3.5 py-2.5 small fw-semibold d-inline-flex align-items-center gap-1.5">
                                    <i class="fa-solid fa-camera text-accent-neon"></i>
                                    <span>Explore Product Staging</span>
                                </a>
                            </div>
                        </div>

                        <!-- Right: Visual Interactive Card Mockup -->
                        <div class="col-lg-6">
                            <div class="p-4 rounded-4 bg-dark bg-opacity-75 border border-secondary border-opacity-25 position-relative shadow-sm" style="background: linear-gradient(145deg, #181926 0%, #0d0f1a 100%);">
                                <div class="row g-2 align-items-center">
                                    <div class="col-6">
                                        <div class="p-3 rounded-3 bg-surface-2 border border-secondary border-opacity-25 text-center">
                                            <span class="badge bg-secondary mb-2 small">ORIGINAL (720p)</span>
                                            <div class="py-4 text-white-50 small"><i class="fa-regular fa-image fs-1 opacity-50 mb-2 d-block"></i>Low Res Input</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-3 rounded-3 bg-dark border border-accent-brand text-center" style="box-shadow: 0 0 20px rgba(200, 224, 25, 0.15);">
                                            <span class="badge bg-brand-translucent text-accent-brand border border-brand-50 mb-2 small">ENHANCED (4K)</span>
                                            <div class="py-4 text-white small fw-bold"><i class="fa-solid fa-wand-magic-sparkles text-accent-neon fs-1 mb-2 d-block"></i>Neural Super Res</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 text-center">
                                    <span class="text-white-50 font-monospace small"><i class="fa-solid fa-circle-check text-success me-1"></i> Model Confidence: 99.4% // Sub-second inference</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Navigation Buttons (Prev / Next & Dots) -->
            <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                <!-- Prev Button -->
                <button type="button" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center saas-nav-btn" id="saasPrevBtn" style="width: 44px; height: 44px;" aria-label="Previous Slide">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Dots & Counter -->
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex gap-2" id="saasDotsContainer">
                        <span class="saas-dot active rounded-pill" data-slide-index="0" style="width: 28px; height: 8px; background: var(--accent-neon); cursor: pointer; transition: all 0.3s ease;"></span>
                        <span class="saas-dot rounded-circle" data-slide-index="1" style="width: 8px; height: 8px; background: rgba(255, 255, 255, 0.25); cursor: pointer; transition: all 0.3s ease;"></span>
                        <span class="saas-dot rounded-circle" data-slide-index="2" style="width: 8px; height: 8px; background: rgba(255, 255, 255, 0.25); cursor: pointer; transition: all 0.3s ease;"></span>
                    </div>
                    <span class="font-monospace text-white-50 small" id="saasSlideCounter">01 / 03</span>
                </div>

                <!-- Next Button -->
                <button type="button" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center saas-nav-btn" id="saasNextBtn" style="width: 44px; height: 44px;" aria-label="Next Slide">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>

        </div>
    </div>
</section>

<!-- SaaS Slider Logic -->
<script>
(function() {
    function initSaasSlider() {
        const slides = document.querySelectorAll('.saas-slide');
        const tabs = document.querySelectorAll('.saas-tab-btn');
        const dots = document.querySelectorAll('.saas-dot');
        const counter = document.getElementById('saasSlideCounter');
        const prevBtn = document.getElementById('saasPrevBtn');
        const nextBtn = document.getElementById('saasNextBtn');
        const container = document.getElementById('saasSliderContainer');

        if (!slides.length) return;

        let currentIndex = 0;
        let autoplayTimer = null;

        function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            currentIndex = index;

            slides.forEach((slide, i) => {
                if (i === currentIndex) {
                    slide.classList.remove('d-none');
                    slide.classList.add('active');
                } else {
                    slide.classList.add('d-none');
                    slide.classList.remove('active');
                }
            });

            tabs.forEach((tab, i) => {
                if (i === currentIndex) {
                    tab.classList.add('active', 'btn-brand');
                    tab.classList.remove('text-white-50', 'btn-dark');
                } else {
                    tab.classList.remove('active', 'btn-brand');
                    tab.classList.add('text-white-50');
                }
            });

            dots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.classList.add('active');
                    dot.style.width = '28px';
                    dot.style.borderRadius = '50rem';
                    dot.style.background = 'var(--accent-neon)';
                } else {
                    dot.classList.remove('active');
                    dot.style.width = '8px';
                    dot.style.borderRadius = '50%';
                    dot.style.background = 'rgba(255, 255, 255, 0.25)';
                }
            });

            if (counter) {
                counter.textContent = String(currentIndex + 1).padStart(2, '0') + ' / ' + String(slides.length).padStart(2, '0');
            }
        }

        function startAutoplay() {
            stopAutoplay();
            autoplayTimer = setInterval(() => {
                showSlide(currentIndex + 1);
            }, 6000);
        }

        function stopAutoplay() {
            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                showSlide(currentIndex - 1);
                startAutoplay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                showSlide(currentIndex + 1);
                startAutoplay();
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const idx = parseInt(tab.getAttribute('data-slide-index'), 10);
                showSlide(idx);
                startAutoplay();
            });
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const idx = parseInt(dot.getAttribute('data-slide-index'), 10);
                showSlide(idx);
                startAutoplay();
            });
        });

        if (container) {
            container.addEventListener('mouseenter', stopAutoplay);
            container.addEventListener('mouseleave', startAutoplay);
        }

        // Initialize state
        showSlide(0);
        startAutoplay();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSaasSlider);
    } else {
        initSaasSlider();
    }
})();
</script>

<!-- Technologies We're Using Marquee Section Start -->
<section id="technologies-section" class="py-5 bg-surface text-white border-top border-light-subtle overflow-hidden">
    <div class="container mb-4">
        <div class="d-flex align-items-center justify-content-center gap-3 max-w-700 mx-auto text-center">
            <div class="flex-grow-1 bg-secondary bg-opacity-25" style="height: 1px;"></div>
            <div class="d-flex align-items-center gap-2">
                <span class="rounded-circle bg-accent-brand d-inline-block" style="width: 8px; height: 8px;"></span>
                <h3 class="fw-extrabold text-white m-0 px-2 fs-4 text-uppercase" style="letter-spacing: 1px;">Technologies We're Using</h3>
                <span class="rounded-circle bg-accent-brand d-inline-block" style="width: 8px; height: 8px;"></span>
            </div>
            <div class="flex-grow-1 bg-secondary bg-opacity-25" style="height: 1px;"></div>
        </div>
    </div>

    <div class="tech-marquee-wrapper">
        <div class="tech-marquee-track">

            <!-- Block 1 (First Half: 18 items) -->
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/n8n/EA4B71" alt="n8n" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">n8n</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/make/6D3A9C" alt="Make" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Make</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/openai/10A37F" alt="OpenAI" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">OpenAI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/anthropic/D97706" alt="Claude" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Claude</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/whatsapp/25D366" alt="WhatsApp API" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">WhatsApp API</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/elevenlabs/ffffff" alt="ElevenLabs" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">ElevenLabs</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/zapier/FF4A00" alt="Zapier" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Zapier</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/hubspot/FF7A59" alt="HubSpot" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">HubSpot</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/python/3776AB" alt="Python" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Python</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/n8n/EA4B71" alt="n8n" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">n8n</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/make/6D3A9C" alt="Make" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Make</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/openai/10A37F" alt="OpenAI" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">OpenAI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/anthropic/D97706" alt="Claude" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Claude</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/whatsapp/25D366" alt="WhatsApp API" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">WhatsApp API</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/elevenlabs/ffffff" alt="ElevenLabs" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">ElevenLabs</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/zapier/FF4A00" alt="Zapier" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Zapier</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/hubspot/FF7A59" alt="HubSpot" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">HubSpot</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/python/3776AB" alt="Python" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Python</span>
            </div>

            <!-- Block 2 (Second Half: Exact Duplicate for Infinite Seamless 0-to-100% Loop) -->
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/n8n/EA4B71" alt="n8n" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">n8n</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/make/6D3A9C" alt="Make" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Make</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/openai/10A37F" alt="OpenAI" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">OpenAI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/anthropic/D97706" alt="Claude" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Claude</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/whatsapp/25D366" alt="WhatsApp API" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">WhatsApp API</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/elevenlabs/ffffff" alt="ElevenLabs" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">ElevenLabs</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/zapier/FF4A00" alt="Zapier" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Zapier</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/hubspot/FF7A59" alt="HubSpot" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">HubSpot</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/python/3776AB" alt="Python" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Python</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/n8n/EA4B71" alt="n8n" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">n8n</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/make/6D3A9C" alt="Make" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Make</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/openai/10A37F" alt="OpenAI" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">OpenAI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/anthropic/D97706" alt="Claude" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Claude</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/whatsapp/25D366" alt="WhatsApp API" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">WhatsApp API</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/elevenlabs/ffffff" alt="ElevenLabs" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">ElevenLabs</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/zapier/FF4A00" alt="Zapier" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Zapier</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/hubspot/FF7A59" alt="HubSpot" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">HubSpot</span>
            </div>
            <div class="tech-item">
                <div class="tech-item-icon"><img src="https://cdn.simpleicons.org/python/3776AB" alt="Python" style="width:36px; height:36px; object-fit:contain;"></div>
                <span class="tech-item-name">Python</span>
            </div>

        </div>
    </div>
</section>
<!-- Technologies We're Using Marquee Section End -->

<!-- Our Process Section Start -->
<section id="process-section" class="section-padding bg-surface text-white border-top border-light-subtle">
    <div class="container">
        <div class="text-center mb-5 max-w-700 mx-auto">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">HOW WE WORK</span>
            <h2 class="display-5 fw-extrabold mb-3 text-white typewriter-anim">Our 4-Step Automation Process</h2>
            <p class="text-white-50 fs-5">A structured, collaborative approach to connecting your business operations.</p>
        </div>
        
        <div class="row g-4 mt-2">
            <!-- Step 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-surface-1 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25 position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">01</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-phone text-accent-brand"></i></div>
                    <h5 class="fw-bold text-white">Discovery Call</h5>
                    <p class="text-white-50 small mb-0">We analyze your current tools, identify manual bottlenecks, and map out opportunities to save time.</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-surface-1 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25 position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">02</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-compass text-accent-brand"></i></div>
                    <h5 class="fw-bold text-white">Workflow Design</h5>
                    <p class="text-white-50 small mb-0">We design a visual blueprint mapping out exactly how your CRM, emails, and tools will sync.</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-surface-1 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25 position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">03</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-code text-accent-brand"></i></div>
                    <h5 class="fw-bold text-white">Build & Test</h5>
                    <p class="text-white-50 small mb-0">We build the active node pipelines (n8n/Make) and run strict test cases to ensure data flows flawlessly.</p>
                </div>
            </div>
            <!-- Step 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="p-4 bg-surface-1 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25 position-relative">
                    <span class="position-absolute top-0 end-0 m-3 text-accent-brand fw-extrabold display-6 opacity-25">04</span>
                    <div class="icon-box mb-3"><i class="fa-solid fa-circle-check text-accent-brand"></i></div>
                    <h5 class="fw-bold text-white">Launch & Support</h5>
                    <p class="text-white-50 small mb-0">We launch the systems live, hand over documentation, and provide ongoing optimization support.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Process Section End -->



<!-- Packages Section Start -->
<section id="packages-section" class="packages-area section-padding bg-dark position-relative overflow-hidden">
    <div class="container position-relative z-1">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".1s">
            <span class="badge bg-brand-translucent text-accent-brand mb-3 font-monospace px-3 py-2 border border-brand-50">PACKAGES</span>
            <h2 class="display-5 fw-bold text-white mb-3">Our Core Packages</h2>
            <div class="title-underline mx-auto mb-4"></div>
            <p class="text-white-50 mx-auto max-w-700">Choose the right AI voice agent, autonomous workflow pipeline, or commercial photography package tailored to scale your business.</p>
        </div>

        <div class="row g-4 justify-content-center align-items-stretch">
            
            <!-- Package 1: AI Voice Agent Deployment -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="card pricing-card h-100 bg-surface border-0 rounded-4 p-4 p-lg-5 position-relative text-center hover-lift d-flex flex-column" style="box-shadow: 0 10px 30px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div class="mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">
                            <i class="fa-solid fa-microphone-lines"></i>
                        </div>
                        <div class="badge rounded-pill py-1 px-3 fw-bold mb-2 shadow-sm" style="font-size: 0.75rem; letter-spacing: 1px; background-color: #D4FF3D; color: #0a0e1a !important;">HIGH DEMAND</div>
                        <h3 class="h4 fw-bold text-white mb-2">AI Voice Agent</h3>
                        <p class="text-muted small">Autonomous conversational calling</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Inbound & Outbound Voice Calling</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Sub-500ms Human Cadence & Latency</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Automated Appointment Booking & Calendar</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>CRM Data Sync & Live Call Transcripts</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>24/7 Autonomous Inbound Lead Triage</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="voice-agent" class="btn btn-outline-brand w-100 rounded-pill py-3 fw-extrabold shadow-sm hover-lift">Try Voice Demo</a>
                    </div>
                </div>
            </div>

            <!-- Package 2: AI Automation (POPULAR) -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="card pricing-card scale-lg-up h-100 bg-surface rounded-4 p-4 p-lg-5 position-relative text-center d-flex flex-column" style="box-shadow: 0 15px 40px rgba(200, 224, 25, 0.15); border: 2px solid var(--accent-neon) !important;">
                    
                    <div class="mb-4 mt-2">
                        <div class="badge rounded-pill py-1 px-3 fw-bold mb-4 shadow-sm" style="font-size: 0.75rem; letter-spacing: 1px; background-color: #D4FF3D; color: #0a0e1a !important;">MOST POPULAR</div>
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <h3 class="h4 fw-bold text-white mb-2">AI Automations</h3>
                        <p class="text-muted small">Intelligent agents & custom pipelines</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Smart Chatbots (WhatsApp, Web, Instagram)</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>End-to-End n8n & Make.com Workflows</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Multi-Tool CRM, Email & API Sync</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Dynamic Lead Scoring & Data Extraction</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Dedicated Pipeline Monitoring & Support</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="ai-Agent-Automations" class="btn btn-outline-brand w-100 rounded-pill py-3 fw-extrabold shadow-sm hover-lift">Explore Solutions</a>
                    </div>
                </div>
            </div>

            <!-- Package 3: AI Product Staging & Visuals -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="card pricing-card h-100 bg-surface border-0 rounded-4 p-4 p-lg-5 position-relative text-center hover-lift d-flex flex-column" style="box-shadow: 0 10px 30px rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div class="mb-4">
                        <div class="bg-brand-translucent text-accent-brand rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 60px; height: 60px; font-size: 24px;">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <h3 class="h4 fw-bold text-white mb-2">AI Product Staging</h3>
                        <p class="text-muted small">Photorealistic AI backgrounds & edits</p>
                    </div>
                    <hr class="border-secondary opacity-25 mb-4">
                    <ul class="list-unstyled text-white-50 mb-5 text-start" style="font-size: 0.95rem;">
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>AI Background Replacement & 3D Staging</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Dynamic Cinematic Lighting & Shadows</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>High-End Retouching & Color Correction</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>Studio-Quality Visuals from Raw Photos</span></li>
                        <li class="mb-3 d-flex align-items-start"><i class="fa-solid fa-check text-accent-brand mt-1 me-3 flex-shrink-0"></i> <span>E-Commerce & Social Media Ready Assets</span></li>
                    </ul>
                    <div class="mt-auto pt-4">
                        <a href="product-shoot" class="btn btn-outline-brand w-100 rounded-pill py-3 fw-extrabold shadow-sm hover-lift">Explore AI Visuals</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Packages Section End -->

<!-- CTA Section Start -->
<section class="cta-section section-padding bg-surface border-top border-light-subtle text-center">
    <div class="container max-w-700">
        <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">LET'S BUILD SOMETHING GREAT</span>
        <h2 class="display-4 fw-extrabold mb-4 text-white">Ready to grow your business online?</h2>
        <p class="fs-5 text-white-50 mb-5">Book a free, no-pressure consultation. We'll review your goals and tell you exactly what it'll take.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact" class="btn btn-brand btn-lg px-5 py-3 shadow-sm">
                <span>Book a Free Consultation</span>
                <span class="arrow-btn"><i class="fa-solid fa-calendar-check"></i></span>
            </a>
            <a href="ai-Agent-Automations" class="btn btn-outline-light btn-lg px-5 py-3">
                <span>See Services</span>
            </a>
        </div>
    </div>
</section>
<!-- CTA Section End -->
<!-- Testimonials Section Start -->
<!-- TODO: When collecting future testimonials, prioritize ones with specific measurable results (e.g., "reduced resolution time by 70%") -->
<section id="testimonials-section" class="section-padding bg-surface text-white border-top border-light-subtle">
    <div class="container max-w-800">
        <div class="text-center mb-5">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">TESTIMONIALS</span>
            <h2 class="display-5 fw-extrabold mb-3 text-white typewriter-anim">What Our Clients Say</h2>
            <p class="text-white-50 fs-5">Trusted by tech companies and service providers worldwide.</p>
        </div>
        
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center py-4">
                    <div class="fs-2 text-accent-brand mb-3"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="fs-5 text-white-50 px-md-5 italic">
                        "Automatixes transformed our sales onboarding. They built a custom n8n lead scoring agent that synced our calendar, CRM, and emails seamlessly. The team was fast, professional, and precise!"
                    </p>
                    <h5 class="fw-bold text-white mt-4 mb-1">M. Ibrahim</h5>
                    <p class="text-white-50 small">CEO, TechVantage Corp</p>
                </div>
                <div class="carousel-item text-center py-4">
                    <div class="fs-2 text-accent-brand mb-3"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="fs-5 text-white-50 px-md-5 italic">
                        "The AI Voice Agent they deployed handles our customer queries and call bookings around the clock without latency. Coupled with their mind-blowing AI product staging and background edits, our brand conversion rate skyrocketed!"
                    </p>
                    <h5 class="fw-bold text-white mt-4 mb-1">Sarah K.</h5>
                    <p class="text-white-50 small">Brand Manager, Luxe Aesthetics</p>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%; opacity: 0.8;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%; opacity: 0.8;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Testimonials Section End -->

<!-- FAQ Section Start -->
<section id="faq-section" class="section-padding bg-transparent text-white border-top border-light-subtle">
    <div class="container max-w-800">
        <div class="text-center mb-5">
            <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">QUESTIONS</span>
            <h2 class="display-5 fw-extrabold mb-3 text-white typewriter-anim">Frequently Asked Questions</h2>
            <p class="text-white-50 fs-5">Common queries answered about our AI Voice Agents and automation systems.</p>
        </div>
        
        <div class="accordion accordion-flush" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How long does an AI Automation workflow setup take?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-white-50 py-3">
                        Generally, standard workflow automations (like email pipelines, CRM syncing, or simple chatbots) take between 1 to 2 weeks to design, integrate, test, and launch.
                    </div>
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Are my client leads and databases secure with your setup?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-white-50 py-3">
                        Yes. Your data is protected by strict Firestore security rules that control exactly who can read or write it, and all form submissions are validated and sanitized server-side to block spam and malicious input.
                    </div>
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can we link third-party tools like Slack or WhatsApp?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-white-50 py-3">
                        Yes, we integrate n8n, Make, or custom API endpoints to route data triggers to WhatsApp business channels, Slack workspaces, or local Discord systems.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does an AI Automation workflow setup take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Generally, standard workflow automations (like email pipelines, CRM syncing, or simple chatbots) take between 1 to 2 weeks to design, integrate, test, and launch."
      }
    },
    {
      "@type": "Question",
      "name": "Are my client leads and databases secure with your setup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Your data is protected by strict Firestore security rules that control exactly who can read or write it, and all form submissions are validated and sanitized server-side to block spam and malicious input."
      }
    },
    {
      "@type": "Question",
      "name": "Can we link third-party tools like Slack or WhatsApp?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we integrate n8n, Make, or custom API endpoints to route data triggers to WhatsApp business channels, Slack workspaces, or local Discord systems."
      }
    }
  ]
}
</script>

<!-- Contact Section Start -->
<section id="contact-section" class="section-padding bg-surface text-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <span class="badge rounded-pill border border-secondary text-light mb-3 px-3 py-2" style="background: rgba(255,255,255,0.05); letter-spacing: 1px;">GET IN TOUCH</span>
                <h2 class="display-6 fw-extrabold text-white mb-4 typewriter-anim">Start Your Automation Journey</h2>
                <p class="text-white-50 fs-5 mb-4">
                    Send us your details. Submitting this form writes directly to our Firestore database and triggers our notifications.
                </p>
                <div class="contact-details mt-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box me-3"><i class="fa-solid fa-envelope text-accent-brand"></i></div>
                        <div>
                            <h6 class="mb-0 text-white-50">Email Us</h6>
                            <a href="mailto:contact@automatixes.com" class="text-white text-decoration-none fw-bold">contact@automatixes.com</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3"><i class="fa-solid fa-phone text-accent-brand"></i></div>
                        <div>
                            <h6 class="mb-0 text-white-50">Call Us</h6>
                            <a href="tel:+923366920141" class="text-white text-decoration-none fw-bold">+92 336 6920141</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="contact-form-wrapper p-4 p-md-5 rounded-4 shadow-sm bg-surface-1 border border-secondary border-opacity-25">
                    <form id="contact-firebase-form" novalidate>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="contact-name" class="form-label text-white fw-bold">Full Name</label>
                                <input type="text" class="form-control border-light-subtle bg-transparent text-white" id="contact-name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact-email" class="form-label text-white fw-bold">Email Address</label>
                                <input type="email" class="form-control border-light-subtle bg-transparent text-white" id="contact-email" placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contact-phone" class="form-label text-white fw-bold">Phone</label>
                                <input type="tel" class="form-control border-light-subtle bg-transparent text-white" id="contact-phone" placeholder="+92 300 1234567">
                            </div>
                            <div class="col-md-6">
                                <label for="contact-biz-link" class="form-label text-white fw-bold">Business / Freelancer Link</label>
                                <input type="url" class="form-control border-light-subtle bg-transparent text-white" id="contact-biz-link" placeholder="https://yourprofile.com">
                            </div>
                            <div class="col-12">
                                <label for="contact-service" class="form-label text-white fw-bold">Service Required</label>
                                <select class="form-select border-light-subtle bg-transparent text-white" id="contact-service" required>
                                    <option value="" disabled selected>Select a Service</option>
                                    <option value="AI Voice Agents">Autonomous AI Voice Agents</option>
                                    <option value="AI Automations">AI Automations (n8n/Make)</option>
                                    <option value="Product Shoot">Commercial Product Shoot</option>
                                    <option value="CRM Integration">CRM & Custom API Integration</option>
                                    <option value="Consultation">General Automation Consultation</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="contact-message" class="form-label text-white fw-bold">Project Description</label>
                                <textarea class="form-control border-light-subtle bg-transparent text-white" id="contact-message" rows="4" placeholder="Tell us about your requirements..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-brand w-100 py-3"><span>Send Message</span> <span class="arrow-btn"><i class="fa-solid fa-arrow-up-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- JSON-LD FAQ and Review Schemas -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How long does an AI Automation workflow setup take?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Generally, standard workflow automations (like email pipelines, CRM syncing, or simple chatbots) take between 1 to 2 weeks to design, integrate, test, and launch."
    }
  },{
    "@type": "Question",
    "name": "Are my client leads and databases secure with your setup?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. Your data is protected by strict Firestore security rules that control exactly who can read or write it, and all form submissions are validated and sanitized server-side to block spam and malicious input."
    }
  },{
    "@type": "Question",
    "name": "Can we link third-party tools like Slack or WhatsApp?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we integrate n8n, Make, or custom API endpoints to route data triggers to WhatsApp business channels, Slack workspaces, or local Discord systems."
    }
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Review",
  "itemReviewed": {
    "@type": "LocalBusiness",
    "name": "Automatixes"
  },
  "author": {
    "@type": "Person",
    "name": "M. Ibrahim"
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5"
  },
  "reviewBody": "Automatixes transformed our sales onboarding. They built a custom n8n lead scoring agent that synced our calendar, CRM, and emails seamlessly. The team was fast, professional, and precise!"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Review",
  "itemReviewed": {
    "@type": "LocalBusiness",
    "name": "Automatixes"
  },
  "author": {
    "@type": "Person",
    "name": "Sarah K."
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "5"
  },
  "reviewBody": "The AI Voice Agent they deployed handles our customer queries and call bookings around the clock without latency. Coupled with their high-end product shoot photography, our brand conversion rate skyrocketed!"
}
</script>

<?php include 'footer.php'; ?>






