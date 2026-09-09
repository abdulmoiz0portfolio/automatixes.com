<?php 
$page_key = 'ai-automated-solutions'; 
include 'header.php'; 
?>

<!-- Hero Section -->
<section class="hero-section position-relative overflow-hidden" style="padding-top: 180px; padding-bottom: 120px;">
    <!-- Abstract Glowing Orbs -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0; pointer-events: none; overflow: hidden;">
        <div class="position-absolute" style="top: -10%; left: -10%; width: 50vw; height: 50vw; background: radial-gradient(circle, rgba(231,127,35,0.15) 0%, rgba(0,0,0,0) 70%); filter: blur(60px);"></div>
        <div class="position-absolute" style="bottom: -20%; right: -10%; width: 60vw; height: 60vw; background: radial-gradient(circle, rgba(204,255,0,0.1) 0%, rgba(0,0,0,0) 70%); filter: blur(80px);"></div>
    </div>
    
    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mx-auto" style="max-width: 900px;">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-surface-2 border border-light-subtle mb-4 wow fadeInUp">
                <span class="d-inline-block rounded-circle" style="width:8px; height:8px; background:var(--accent-neon); box-shadow: 0 0 10px var(--accent-neon);"></span>
                <span class="text-white small fw-semibold tracking-wide text-uppercase">End-to-End AI Integration</span>
            </div>
            
            <h1 class="display-2 fw-bold mb-4" style="line-height: 1.1; letter-spacing: -2px; color: #ffffff;">
                AI Agents & <br>
                <span style="color: var(--accent-neon);">Workflow Automations.</span>
            </h1>
            
            <p class="lead mx-auto mb-5" style="max-width: 650px; font-size: 1.15rem; color: #9ca3af;">
                Streamline operations, eliminate manual bottlenecks, and deploy intelligent agents that handle customer service and qualify leads 24/7.
            </p>
            
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="contact" class="btn-magnetic btn-magnetic-neon" data-cursor="magnetic">
                    <span class="btn-magnetic-inner">Start Your Project <i class="fa-solid fa-arrow-right ms-1"></i></span>
                </a>
                <a href="portfolio" class="btn-magnetic btn-magnetic-primary" data-cursor="magnetic">
                    <span class="btn-magnetic-inner">View Case Studies</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Autonomous Agents Section -->
<section class="section-padding position-relative border-top border-light-subtle">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="pe-lg-4">
                    <h2 class="display-5 fw-bold mb-4">Autonomous <span style="color: var(--accent-orange);">AI Agents</span></h2>
                    <p class="fs-5 text-secondary mb-4">Deploy intelligent natural language agents trained on your exact business data to handle customer support, qualify inbound leads, and route complex queries—all without human intervention.</p>
                    <ul class="list-unstyled mb-5">
                        <li class="d-flex align-items-center mb-3">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-surface-2" style="width: 48px; height: 48px; border: 1px solid rgba(255,255,255,0.1);">
                                <i class="fa-solid fa-headset text-accent-brand"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-white fw-semibold">24/7 Customer Support</h5>
                                <p class="mb-0 text-muted small">Instantly resolve queries using your knowledge base.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-surface-2" style="width: 48px; height: 48px; border: 1px solid rgba(255,255,255,0.1);">
                                <i class="fa-solid fa-filter text-accent-brand"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-white fw-semibold">Intelligent Lead Qualification</h5>
                                <p class="mb-0 text-muted small">Screen and score leads before they hit your sales team.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle bg-surface-2" style="width: 48px; height: 48px; border: 1px solid rgba(255,255,255,0.1);">
                                <i class="fa-solid fa-microphone text-accent-brand"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-white fw-semibold">Voice AI Integrations</h5>
                                <p class="mb-0 text-muted small">Inbound & outbound calling via advanced voice models.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card-glass p-4 rounded-4 position-relative">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=800&q=80" alt="AI Agents Interface" class="img-fluid rounded-3" style="filter: brightness(0.8) contrast(1.2);">
                    <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-dark rounded-3 border border-light-subtle d-flex align-items-center gap-3" style="backdrop-filter: blur(10px);">
                        <div class="spinner-grow text-accent-neon spinner-grow-sm" role="status"></div>
                        <span class="text-white fw-semibold small">Agent analyzing context...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workflow Automations Section -->
<section class="section-padding position-relative bg-surface-1">
    <div class="container">
        <div class="row align-items-center g-5 flex-lg-row-reverse">
            <div class="col-lg-5">
                <div class="ps-lg-4">
                    <h2 class="display-5 fw-bold mb-4">Workflow <span style="color: var(--accent-neon);">Automations</span></h2>
                    <p class="fs-5 text-secondary mb-4">Link your tools, databases, and communication channels. We build robust data pipelines using n8n and Make to sync operations flawlessly and eliminate manual copy-pasting.</p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">n8n</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">Make.com</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">GoHighLevel</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">Zapier</span>
                        <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2">Webhooks</span>
                    </div>
                    <ul class="list-unstyled text-secondary mb-0">
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Form-to-CRM:</strong> Instant HubSpot or Salesforce mapping.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Channel Alerts:</strong> Slack & Discord lead notifications.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Calendar Syncs:</strong> Automated booking coordination.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle-check text-accent-neon me-2"></i> <strong>Auto Invoicing:</strong> Auto generation via QuickBooks.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="card-glass p-4 rounded-4 h-100 text-center" data-cursor="magnetic">
                            <i class="fa-solid fa-diagram-project fs-1 text-accent-brand mb-3"></i>
                            <h4 class="text-white mb-2">Visual Logic</h4>
                            <p class="text-muted small mb-0">Complex decision trees built visually, ensuring easily maintainable automation logic.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-glass p-4 rounded-4 h-100 text-center" data-cursor="magnetic">
                            <i class="fa-solid fa-bolt fs-1 text-accent-neon mb-3"></i>
                            <h4 class="text-white mb-2">Instant Triggers</h4>
                            <p class="text-muted small mb-0">Webhook-driven events that fire the moment a customer interacts with your business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="section-padding position-relative border-top border-light-subtle">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <h2 class="display-5 fw-bold mb-3">Why <span style="color: var(--accent-neon);">Automate?</span></h2>
            <p class="fs-5 text-secondary mx-auto max-w-700">The core benefits of integrating AI agents and automated workflows into your operations.</p>
        </div>
        <div class="row g-4">
            <!-- Benefit 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-clock-rotate-left fs-4 text-accent-neon"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">Save Hundreds of Hours</h5>
                    <p class="text-muted small mb-0">Eliminate repetitive manual tasks like copy-pasting data across platforms, freeing your team for high-value work.</p>
                </div>
            </div>
            <!-- Benefit 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-shield-halved fs-4 text-accent-brand"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">Zero Human Error</h5>
                    <p class="text-muted small mb-0">Data pipelines map fields flawlessly every single time. No more missed leads, typos, or forgotten follow-ups.</p>
                </div>
            </div>
            <!-- Benefit 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-bolt fs-4 text-accent-neon"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">24/7 Operations</h5>
                    <p class="text-muted small mb-0">Your AI agents and webhooks never sleep. Respond to inquiries and qualify leads instantly at 3 AM.</p>
                </div>
            </div>
            <!-- Benefit 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-surface-2 mb-4" style="width: 56px; height: 56px; border: 1px solid rgba(255,255,255,0.1);">
                        <i class="fa-solid fa-arrow-trend-up fs-4 text-accent-orange"></i>
                    </div>
                    <h5 class="text-white fw-bold mb-3">Infinite Scalability</h5>
                    <p class="text-muted small mb-0">Handle 10 leads or 10,000 leads with the exact same infrastructure without hiring additional admin staff.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enterprise Systems Architecture Section -->
<section class="section-padding position-relative bg-surface-1 border-top border-light-subtle">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-surface-2 border border-light-subtle text-accent-neon font-monospace px-3 py-2 mb-3">SYSTEMS ARCHITECTURE</span>
            <h2 class="display-5 fw-bold text-white mb-3">The Dual-Engine <span style="color: var(--accent-neon);">Automation Framework</span></h2>
            <p class="fs-5 text-secondary">Why generic chatbots fail: enterprise automation requires separating deterministic data movement from probabilistic reasoning.</p>
        </div>

        <div class="row g-4 mb-5">
            <!-- Deterministic Layer -->
            <div class="col-lg-6">
                <div class="card-glass p-4 p-lg-5 rounded-4 h-100 border-start border-4 border-accent-brand">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="d-flex align-items-center justify-content-center rounded-3 bg-surface-2" style="width: 52px; height: 52px;">
                            <i class="fa-solid fa-network-wired fs-4 text-accent-brand"></i>
                        </div>
                        <div>
                            <span class="text-uppercase text-muted small fw-bold font-monospace">Layer 01 // Deterministic</span>
                            <h3 class="text-white fw-bold h4 mb-0">Workflows & Integration Pipelines</h3>
                        </div>
                    </div>
                    <p class="text-secondary leading-relaxed mb-4">
                        Financial figures, CRM status tags, inventory updates, and invoice dispatches cannot rely on probabilistic guesswork. We engineer strict, deterministic state machines using n8n, Make, and webhook microservices.
                    </p>
                    <ul class="list-unstyled text-secondary small mb-0 d-flex flex-column gap-2">
                        <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-accent-brand"></i> <strong>100% Predictable Execution:</strong> Every step runs according to strict conditional logic trees.</li>
                        <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-accent-brand"></i> <strong>Zero Hallucination Risk:</strong> Calculations and database writes bypass LLM tokens completely.</li>
                        <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-accent-brand"></i> <strong>Defensive Retries:</strong> Exponential backoff policies ensure zero data loss during network hiccups.</li>
                    </ul>
                </div>
            </div>

            <!-- Cognitive Agentic Layer -->
            <div class="col-lg-6">
                <div class="card-glass p-4 p-lg-5 rounded-4 h-100 border-start border-4 border-accent-neon">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="d-flex align-items-center justify-content-center rounded-3 bg-surface-2" style="width: 52px; height: 52px;">
                            <i class="fa-solid fa-brain fs-4 text-accent-neon"></i>
                        </div>
                        <div>
                            <span class="text-uppercase text-muted small fw-bold font-monospace">Layer 02 // Cognitive</span>
                            <h3 class="text-white fw-bold h4 mb-0">Autonomous AI Agents & RAG</h3>
                        </div>
                    </div>
                    <p class="text-secondary leading-relaxed mb-4">
                        When unstructured inputs arrive—such as a customer asking complex product questions or submitting freeform RFPs—our autonomous AI agents analyze intent, query your grounded knowledge base, and trigger the right tools.
                    </p>
                    <ul class="list-unstyled text-secondary small mb-0 d-flex flex-column gap-2">
                        <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-accent-neon"></i> <strong>Semantic Vector Grounding:</strong> Answers are retrieved exclusively from your vetted docs and policies.</li>
                        <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-accent-neon"></i> <strong>Dynamic Tool Invocation:</strong> The agent calls external APIs to book meetings, verify accounts, or look up order status.</li>
                        <li class="d-flex align-items-center gap-2"><i class="fa-solid fa-circle-check text-accent-neon"></i> <strong>Multi-Turn Memory:</strong> Maintains context across lengthy conversational sessions without resetting.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 4 Architecture Pillars -->
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <i class="fa-solid fa-database text-accent-brand fs-3 mb-3"></i>
                    <h5 class="text-white fw-bold mb-2">Vector Grounding</h5>
                    <p class="text-muted small mb-0">Documents converted to high-dimensional embeddings in Pinecone/pgvector for sub-100ms semantic similarity search.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <i class="fa-solid fa-plug text-accent-neon fs-3 mb-3"></i>
                    <h5 class="text-white fw-bold mb-2">Dynamic Tool Calling</h5>
                    <p class="text-muted small mb-0">Agents autonomously format JSON payloads to trigger webhooks, query PostgreSQL, and update CRM records.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <i class="fa-solid fa-shield-virus text-accent-orange fs-3 mb-3"></i>
                    <h5 class="text-white fw-bold mb-2">Prompt Guardrails</h5>
                    <p class="text-muted small mb-0">Rigid system instructions, input sanitization, and output validators that block jailbreaks, toxic inputs, and off-topic chat.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <i class="fa-solid fa-chart-line text-accent-neon fs-3 mb-3"></i>
                    <h5 class="text-white fw-bold mb-2">Real-Time Telemetry</h5>
                    <p class="text-muted small mb-0">Full execution tracing, latency audits, token consumption counters, and Slack alerting for error spikes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Operational Pipelines Section -->
<section class="section-padding position-relative border-top border-light-subtle">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-surface-2 border border-light-subtle text-white font-monospace px-3 py-2 mb-3">PRODUCTION PIPELINES</span>
            <h2 class="display-5 fw-bold text-white mb-3">Mission-Critical <span style="color: var(--accent-brand);">Automated Workflows</span></h2>
            <p class="fs-5 text-secondary">The foundational systems our engineering team deploys to drive operational throughput.</p>
        </div>

        <div class="row g-4">
            <!-- Pipeline 1 -->
            <div class="col-lg-6">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="badge bg-dark border border-light-subtle text-accent-neon px-3 py-2 font-monospace">PIPELINE 01</span>
                        <h4 class="text-white fw-bold mb-0">Under-60s Inbound Lead Triage</h4>
                    </div>
                    <p class="text-secondary mb-3">
                        Speed-to-lead is the single highest predictor of B2B close rates. The instant an inquiry lands on your website form, Facebook Ad, or landing page:
                    </p>
                    <div class="bg-surface-2 p-3 rounded-3 border border-light-subtle mb-3">
                        <div class="d-flex flex-column gap-2 small text-secondary">
                            <div><span class="text-accent-neon fw-bold">Step 1:</span> Webhook receives payload & runs Cloudflare DNS MX email verification.</div>
                            <div><span class="text-accent-neon fw-bold">Step 2:</span> AI Agent enriches lead with company size, LinkedIn data, and estimated revenue.</div>
                            <div><span class="text-accent-neon fw-bold">Step 3:</span> Qualified leads instantly trigger automated WhatsApp / SMS booking invitations.</div>
                            <div><span class="text-accent-neon fw-bold">Step 4:</span> Contact syncs to HubSpot/GoHighLevel with complete transcript history.</div>
                        </div>
                    </div>
                    <span class="text-muted small"><i class="fa-solid fa-arrow-trend-up text-accent-brand me-1"></i> Result: 4.2x increase in qualified discovery call bookings.</span>
                </div>
            </div>

            <!-- Pipeline 2 -->
            <div class="col-lg-6">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="badge bg-dark border border-light-subtle text-accent-brand px-3 py-2 font-monospace">PIPELINE 02</span>
                        <h4 class="text-white fw-bold mb-0">24/7 Autonomous Customer Support</h4>
                    </div>
                    <p class="text-secondary mb-3">
                        Free your human support agents from repetitive tier-1 questions while maintaining white-glove response times across all customer channels:
                    </p>
                    <div class="bg-surface-2 p-3 rounded-3 border border-light-subtle mb-3">
                        <div class="d-flex flex-column gap-2 small text-secondary">
                            <div><span class="text-accent-brand fw-bold">Step 1:</span> User messages via WhatsApp, live chat, or email.</div>
                            <div><span class="text-accent-brand fw-bold">Step 2:</span> RAG engine retrieves verified company policy and order history from SQL.</div>
                            <div><span class="text-accent-brand fw-bold">Step 3:</span> Agent answers instantly in customer's native language with exact resolution.</div>
                            <div><span class="text-accent-brand fw-bold">Step 4:</span> Complex edge-cases escalate to human reps with summarized context.</div>
                        </div>
                    </div>
                    <span class="text-muted small"><i class="fa-solid fa-arrow-trend-up text-accent-neon me-1"></i> Result: 73% automated first-contact resolution with 98% CSAT.</span>
                </div>
            </div>

            <!-- Pipeline 3 -->
            <div class="col-lg-6">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="badge bg-dark border border-light-subtle text-accent-orange px-3 py-2 font-monospace">PIPELINE 03</span>
                        <h4 class="text-white fw-bold mb-0">Automated Billing & Document Pipelines</h4>
                    </div>
                    <p class="text-secondary mb-3">
                        Eliminate manual invoice compilation, PDF generation, and payment follow-ups between closed deals and accounting software:
                    </p>
                    <div class="bg-surface-2 p-3 rounded-3 border border-light-subtle mb-3">
                        <div class="d-flex flex-column gap-2 small text-secondary">
                            <div><span class="text-accent-orange fw-bold">Step 1:</span> CRM deal changes stage to "Closed-Won".</div>
                            <div><span class="text-accent-orange fw-bold">Step 2:</span> n8n calculates tax, line items, and currency conversion.</div>
                            <div><span class="text-accent-orange fw-bold">Step 3:</span> Generates branded PDF invoice and creates live Stripe payment link.</div>
                            <div><span class="text-accent-orange fw-bold">Step 4:</span> Dispatches receipt, logs to QuickBooks, and alerts team on Slack.</div>
                        </div>
                    </div>
                    <span class="text-muted small"><i class="fa-solid fa-arrow-trend-up text-accent-brand me-1"></i> Result: Over 12 admin hours saved weekly with zero reconciliation errors.</span>
                </div>
            </div>

            <!-- Pipeline 4 -->
            <div class="col-lg-6">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="badge bg-dark border border-light-subtle text-accent-neon px-3 py-2 font-monospace">PIPELINE 04</span>
                        <h4 class="text-white fw-bold mb-0">Cross-Platform Sync & Database Syncing</h4>
                    </div>
                    <p class="text-secondary mb-3">
                        Tear down the walls between disconnected software tools. Maintain continuous two-way synchronization across your entire tech stack:
                    </p>
                    <div class="bg-surface-2 p-3 rounded-3 border border-light-subtle mb-3">
                        <div class="d-flex flex-column gap-2 small text-secondary">
                            <div><span class="text-accent-neon fw-bold">Step 1:</span> Instant bi-directional event listeners on Airtable, Supabase, and SQL.</div>
                            <div><span class="text-accent-neon fw-bold">Step 2:</span> Data deduplication, schema normalization, and format sanitization.</div>
                            <div><span class="text-accent-neon fw-bold">Step 3:</span> Syncs inventory, client profiles, and calendar slots across all tools.</div>
                            <div><span class="text-accent-neon fw-bold">Step 4:</span> Dead-letter queue captures failed payloads for zero loss of records.</div>
                        </div>
                    </div>
                    <span class="text-muted small"><i class="fa-solid fa-arrow-trend-up text-accent-neon me-1"></i> Result: Single source of truth across sales, operations, and fulfillment.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quantified Business Impact & Metrics -->
<section class="section-padding bg-surface-1 border-top border-light-subtle">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-surface-2 border border-light-subtle text-accent-neon font-monospace px-3 py-2 mb-3">MEASURABLE ROI</span>
            <h2 class="display-5 fw-bold text-white mb-3">Engineered for <span style="color: var(--accent-neon);">Real Business Growth</span></h2>
            <p class="fs-5 text-secondary">We don't build tech toys; we engineer automation systems that generate quantifiable balance-sheet returns.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="display-4 fw-bold text-accent-neon mb-2">&lt; 45s</div>
                    <h5 class="text-white fw-semibold mb-2">Speed-to-Lead</h5>
                    <p class="text-muted small mb-0">Average automated response and qualification time across web, WhatsApp, and email.</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="display-4 fw-bold text-accent-brand mb-2">73%</div>
                    <h5 class="text-white fw-semibold mb-2">Autonomous Resolution</h5>
                    <p class="text-muted small mb-0">Inbound support inquiries fully resolved by AI agents without human intervention.</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="display-4 fw-bold text-accent-orange mb-2">20+ hrs</div>
                    <h5 class="text-white fw-semibold mb-2">Saved Weekly / Rep</h5>
                    <p class="text-muted small mb-0">Manual data entry, follow-up emails, and report generation eliminated per employee.</p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card-glass p-4 rounded-4 h-100">
                    <div class="display-4 fw-bold text-accent-neon mb-2">99.8%</div>
                    <h5 class="text-white fw-semibold mb-2">Data Precision</h5>
                    <p class="text-muted small mb-0">Flawless field mapping and webhook execution across production integrations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Projects Custom Styles */
.project-card {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    cursor: none;
    border: 1px solid rgba(255,255,255,0.08);
}
.project-card .media-container {
    width: 100%;
    aspect-ratio: 4/3;
    overflow: hidden;
    position: relative;
    background: #111;
}
.project-card .media-container img, 
.project-card .media-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.project-card:hover .media-container img,
.project-card:hover .media-container video {
    transform: scale(1.05);
}
.project-card .overlay {
    position: absolute;
    bottom: 0; left: 0; right: 0;
    padding: 24px;
    background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0) 100%);
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
}
.project-card h4 {
    margin: 0;
    color: #fff;
    font-weight: 600;
}
.project-card .btn-view {
    width: 40px; height: 40px;
    border-radius: 50%;
    background: var(--accent-brand);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.3s ease;
}
.project-card:hover .btn-view {
    transform: translateY(0);
    opacity: 1;
}

/* Lightbox Styles */
#projectLightbox {
    display: none;
    position: fixed;
    top: 0; left: 0; width: 100vw; height: 100vh;
    background: rgba(10,10,12,0.95);
    backdrop-filter: blur(10px);
    z-index: 9999999;
    align-items: center;
    justify-content: center;
}
#projectLightbox.active {
    display: flex;
}
.lightbox-content {
    position: relative;
    width: 90%;
    max-width: 1200px;
    height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lightbox-item {
    display: none;
    max-width: 100%;
    max-height: 100%;
    border-radius: 8px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    object-fit: contain;
}
.lightbox-item.active {
    display: block;
}
.lightbox-controls {
    position: absolute;
    top: 50%; left: -60px; right: -60px;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    pointer-events: none;
}
.lightbox-btn {
    pointer-events: auto;
    width: 50px; height: 50px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    color: white;
    font-size: 20px;
    display: flex; align-items: center; justify-content: center;
    cursor: none;
    transition: all 0.2s;
}
.lightbox-btn:hover { background: var(--accent-neon); color: black; border-color: var(--accent-neon); }
.lightbox-close {
    position: absolute;
    top: 30px; right: 30px;
    width: 45px; height: 45px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    color: white; border: 1px solid rgba(255,255,255,0.3);
    font-size: 22px;
    display: flex; align-items: center; justify-content: center;
    cursor: none;
    z-index: 10;
    transition: all 0.2s;
}
.lightbox-close:hover { background: rgba(255,0,0,0.8); color: white; border-color: transparent; }

@media (max-width: 768px) {
    .lightbox-controls { left: 10px; right: 10px; }
}
</style>

<!-- Projects Showcase Section -->
<section class="section-padding position-relative bg-surface-1 border-top border-light-subtle">
    <div class="container">
        <div class="text-center mb-5 pb-3">
            <span class="badge bg-surface-2 border border-light-subtle text-white px-3 py-2 mb-3">OUR WORK</span>
            <h2 class="display-5 fw-bold mb-3">Featured <span style="color: var(--accent-brand);">Projects</span></h2>
            <p class="fs-5 text-secondary mx-auto max-w-700">Explore some of the AI agents and automated systems we've built.</p>
        </div>
        
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card" onclick="openLightbox('project1')">
                    <div class="media-container">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="CRM Dashboard">
                    </div>
                    <div class="overlay">
                        <div>
                            <span class="badge bg-dark border border-light-subtle text-accent-neon mb-2">Automations</span>
                            <h4>CRM Sync Pipeline</h4>
                        </div>
                        <div class="btn-view"><i class="fa-solid fa-expand"></i></div>
                    </div>
                </div>
                <!-- Hidden Gallery Data -->
                <div id="gallery-project1" class="d-none">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" data-type="image">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" data-type="image">
                </div>
            </div>
            
            <!-- Project 2 (Video Thumb) -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card hover-video-card" onclick="openLightbox('project2')">
                    <div class="media-container">
                        <video src="https://www.w3schools.com/html/mov_bbb.mp4" muted loop playsinline class="card-video"></video>
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=800&q=80" class="card-poster" style="position:absolute;top:0;left:0;z-index:2;pointer-events:none;transition:opacity 0.3s;">
                    </div>
                    <div class="overlay" style="z-index: 3;">
                        <div>
                            <span class="badge bg-dark border border-light-subtle text-accent-brand mb-2">AI Agents</span>
                            <h4>Voice Agent Demo</h4>
                        </div>
                        <div class="btn-view"><i class="fa-solid fa-play"></i></div>
                    </div>
                </div>
                <!-- Hidden Gallery Data -->
                <div id="gallery-project2" class="d-none">
                    <video src="https://www.w3schools.com/html/mov_bbb.mp4" data-type="video" controls></video>
                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=1200&q=80" data-type="image">
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card hover-video-card" onclick="openLightbox('project3')">
                    <div class="media-container">
                        <video src="https://www.w3schools.com/html/mov_bbb.mp4" muted loop playsinline class="card-video"></video>
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=800&q=80" class="card-poster" style="position:absolute;top:0;left:0;z-index:2;pointer-events:none;transition:opacity 0.3s;">
                    </div>
                    <div class="overlay" style="z-index: 3;">
                        <div>
                            <span class="badge bg-dark border border-light-subtle text-accent-orange mb-2">Integration</span>
                            <h4>E-commerce Webhook</h4>
                        </div>
                        <div class="btn-view"><i class="fa-solid fa-expand"></i></div>
                    </div>
                </div>
                <!-- Hidden Gallery Data -->
                <div id="gallery-project3" class="d-none">
                    <video src="https://www.w3schools.com/html/mov_bbb.mp4" data-type="video" controls></video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="projectLightbox">
    <button class="lightbox-close" onclick="closeLightbox()" data-cursor="magnetic"><i class="fa-solid fa-xmark"></i></button>
    <div class="lightbox-content">
        <div id="lightboxMediaContainer" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
            <!-- Media gets injected here -->
        </div>
        <div class="lightbox-controls">
            <button class="lightbox-btn" onclick="prevMedia()" data-cursor="magnetic"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="lightbox-btn" onclick="nextMedia()" data-cursor="magnetic"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</div>

<script>
// Logic for Hover Video Playing
document.querySelectorAll('.hover-video-card').forEach(card => {
    const video = card.querySelector('.card-video');
    const poster = card.querySelector('.card-poster');
    
    card.addEventListener('mouseenter', () => {
        if(video) {
            let playPromise = video.play();
            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    if(poster) poster.style.opacity = '0';
                }).catch(error => {
                    console.log('Autoplay prevented');
                });
            }
        }
    });
    card.addEventListener('mouseleave', () => {
        if(video) {
            video.pause();
            video.currentTime = 0;
            if(poster) poster.style.opacity = '1';
        }
    });
});

// Lightbox Logic
let currentGallery = [];
let currentIndex = 0;

function openLightbox(projectId) {
    const galleryEl = document.getElementById('gallery-' + projectId);
    if(!galleryEl) return;
    
    currentGallery = [];
    Array.from(galleryEl.children).forEach(el => {
        currentGallery.push({
            type: el.getAttribute('data-type'),
            src: el.getAttribute('src')
        });
    });
    
    if(currentGallery.length > 0) {
        currentIndex = 0;
        renderLightboxMedia();
        const lb = document.getElementById('projectLightbox');
        lb.classList.add('active');
        document.body.style.overflow = 'hidden'; 
    }
}

function closeLightbox() {
    const lb = document.getElementById('projectLightbox');
    lb.classList.remove('active');
    document.body.style.overflow = '';
    
    const container = document.getElementById('lightboxMediaContainer');
    container.innerHTML = '';
}

function renderLightboxMedia() {
    const container = document.getElementById('lightboxMediaContainer');
    const item = currentGallery[currentIndex];
    
    if(item.type === 'image') {
        container.innerHTML = <img src=" + item.src + " class="lightbox-item active">;
    } else if (item.type === 'video') {
        container.innerHTML = <video src=" + item.src + " class="lightbox-item active" controls autoplay playsinline style="max-height:85vh; width:auto; border-radius: 8px;"></video>;
    }
    
    // Add custom cursor styling to new elements if needed
    container.querySelectorAll('.lightbox-item').forEach(el => {
        
    });
}

function nextMedia() {
    if(currentGallery.length <= 1) return;
    currentIndex = (currentIndex + 1) % currentGallery.length;
    renderLightboxMedia();
}

function prevMedia() {
    if(currentGallery.length <= 1) return;
    currentIndex = (currentIndex - 1 + currentGallery.length) % currentGallery.length;
    renderLightboxMedia();
}
</script>

<!-- FAQ Section -->
<section class="section-padding position-relative bg-surface-1 border-top border-light-subtle">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-surface-2 border border-light-subtle text-accent-neon font-monospace px-3 py-2 mb-3">FREQUENTLY ASKED QUESTIONS</span>
            <h2 class="display-5 fw-bold text-white mb-3">Questions About <span style="color: var(--accent-neon);">AI Automations</span></h2>
            <p class="fs-5 text-secondary">Everything you need to know about deploying autonomous agents and resilient integration pipelines.</p>
        </div>

        <div class="accordion accordion-flush max-w-900 mx-auto" id="aiSolutionsFaqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How do autonomous AI agents differ from traditional automation like Zapier?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#aiSolutionsFaqAccordion">
                    <div class="accordion-body text-secondary py-3 leading-relaxed">
                        Traditional automations rely on rigid, deterministic triggers (e.g. IF form submitted THEN create contact). They instantly fail when faced with unstructured inputs, ambiguity, or conversational nuance. Autonomous AI agents leverage Large Language Models (LLMs) with Retrieval-Augmented Generation (RAG) to understand complex human intent, inspect knowledge bases, and dynamically call tools—such as booking appointments, resolving complaints, or fetching live database records.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Can you integrate AI agents with our existing CRM, ERP, and databases?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#aiSolutionsFaqAccordion">
                    <div class="accordion-body text-secondary py-3 leading-relaxed">
                        Yes. Automatixes engineers custom API connectors across HubSpot, Salesforce, GoHighLevel, Pipedrive, Zoho, PostgreSQL, Supabase, Airtable, and custom REST/GraphQL endpoints. We establish encrypted, two-way data pipelines that keep client records and operational states synchronized in real time.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do you prevent AI agents from "hallucinating" or sharing false information?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#aiSolutionsFaqAccordion">
                    <div class="accordion-body text-secondary py-3 leading-relaxed">
                        We ground our agents using semantic vector databases (Pinecone / pgvector) containing exclusively your vetted business SOPs, documentation, and product catalogs. System prompts enforce strict deterministic fallback policies: if the agent cannot find verifiable facts within the grounded knowledge base, it is prohibited from guessing and cleanly routes the customer to human tier-2 support.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Do you build on self-hosted n8n, Make.com, or custom code?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#aiSolutionsFaqAccordion">
                    <div class="accordion-body text-secondary py-3 leading-relaxed">
                        We select the optimal architecture based on your volume and compliance needs. For high-volume enterprises seeking to eliminate third-party per-task fees, we deploy and manage self-hosted n8n instances on dedicated VPS infrastructure with PostgreSQL. For rapid cloud integrations, we leverage Make.com, and for edge performance, we write bespoke Node.js and Python microservices.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How do your AI Voice Agents handle live telephone calls and interruptions?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#aiSolutionsFaqAccordion">
                    <div class="accordion-body text-secondary py-3 leading-relaxed">
                        Our AI Voice Agents operate on ultra-low latency voice engines (sub-350ms response time) with active acoustic interruption handling. If a customer interrupts or changes topics mid-sentence, the agent immediately pauses, recalibrates context, and replies naturally just like a human SDR or customer support representative.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item bg-transparent border-bottom border-light-subtle">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed bg-transparent fw-bold text-white fs-5 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What is the typical deployment timeline for an automated workflow or agent?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#aiSolutionsFaqAccordion">
                    <div class="accordion-body text-secondary py-3 leading-relaxed">
                        Standard workflow automations (e.g. CRM form-to-lead pipelines or automated invoice generators) typically go live within 7 to 10 business days. Complex multi-agent conversational deployments take 2 to 4 weeks, which includes vector database indexing, edge-case hardening, and full team handover training.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JSON-LD Service & FAQPage Schema for Google Indexing -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "@id": "https://automatixes.com/ai-automated-solutions#service",
      "url": "https://automatixes.com/ai-automated-solutions",
      "name": "AI Automated Solutions & Autonomous Agents",
      "serviceType": "AI Workflow Automation & Systems Integration",
      "description": "Deploy custom autonomous AI agents and enterprise workflow automations connecting CRM, WhatsApp, Slack, and email platforms for 24/7 business operations.",
      "provider": {
        "@type": "Organization",
        "name": "Automatixes",
        "url": "https://automatixes.com",
        "logo": "https://automatixes.com/favicon.png"
      },
      "areaServed": "Worldwide",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "AI Automation Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Autonomous AI Customer Support Agents"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "n8n & Make Enterprise Workflow Pipelines"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "AI Voice Calling & Lead Qualification Bots"
            }
          }
        ]
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://automatixes.com/ai-automated-solutions#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do autonomous AI agents differ from traditional automation like Zapier?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Traditional automations rely on rigid, deterministic triggers. Autonomous AI agents leverage Large Language Models (LLMs) with Retrieval-Augmented Generation (RAG) to understand complex human intent, inspect knowledge bases, and dynamically call tools."
          }
        },
        {
          "@type": "Question",
          "name": "Can you integrate AI agents with our existing CRM, ERP, and databases?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Automatixes engineers custom API connectors across HubSpot, Salesforce, GoHighLevel, Pipedrive, Zoho, PostgreSQL, Supabase, Airtable, and custom REST/GraphQL endpoints."
          }
        },
        {
          "@type": "Question",
          "name": "How do you prevent AI agents from hallucinating or sharing false information?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We ground our agents using semantic vector databases (Pinecone / pgvector) containing exclusively your vetted business SOPs and documentation, with strict deterministic fallback policies."
          }
        },
        {
          "@type": "Question",
          "name": "Do you build on self-hosted n8n, Make.com, or custom code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We support self-hosted n8n instances on dedicated VPS infrastructure to eliminate third-party per-task fees, Make.com cloud scenarios, and custom Node.js/Python microservices."
          }
        },
        {
          "@type": "Question",
          "name": "How do your AI Voice Agents handle live telephone calls and interruptions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our AI Voice Agents operate on ultra-low latency voice engines (sub-350ms response time) with active acoustic interruption handling, pausing and recalibrating context dynamically."
          }
        },
        {
          "@type": "Question",
          "name": "What is the typical deployment timeline for an automated workflow or agent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard workflow automations go live within 7 to 10 business days. Complex multi-agent conversational deployments take 2 to 4 weeks including sandbox testing and team training."
          }
        }
      ]
    }
  ]
}
</script>

<!-- CTA Section -->
<section class="section-padding border-top border-light-subtle position-relative overflow-hidden">
    <div class="container text-center position-relative z-2">
        <h2 class="display-4 fw-bold text-white mb-4">Ready to <span style="color: var(--accent-orange);">Automate</span>?</h2>
        <p class="lead text-secondary mx-auto mb-5 max-w-700">Get in touch with Automatixes today. Our specialists will design a custom automation plan tailored to your tools and operational goals.</p>
        <a href="contact" class="btn-magnetic btn-magnetic-primary" data-cursor="magnetic">
            <span class="btn-magnetic-inner">Book Free Consultation <i class="fa-solid fa-calendar-check ms-1"></i></span>
        </a>
    </div>
</section>

<?php include 'footer.php'; ?>

