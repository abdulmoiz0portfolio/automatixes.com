<?php 
$page_key = 'portfolio'; 
include 'header.php'; 
?>

<!-- Hero Section -->
<section class="section-padding bg-base pt-5 pb-4 mt-5">
    <div class="container text-center pt-4">
        <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-3" style="background: rgba(200, 224, 25, 0.1); border: 1px solid rgba(200, 224, 25, 0.3);">
            <span class="badge rounded-pill" style="background: #C8E019; color: #000; font-size: 0.7rem; font-weight: 800;">PROVEN ROI</span>
            <span class="text-white small fw-bold">Live AI Deployments & Client Case Studies</span>
        </div>
        <h1 class="display-4 fw-extrabold text-white mb-3" style="letter-spacing: -0.03em;">
            AI Automations & Systems Portfolio
        </h1>
        <p class="lead text-secondary max-w-2xl mx-auto" style="max-width: 720px; font-size: 1.1rem;">
            Real-world autonomous AI agents, n8n workflow pipelines, conversational voice bots, and proprietary SaaS platforms engineered by Automatixes.
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="section-padding bg-base pb-5">
    <div class="container pb-5">
        <div class="row g-4">

            <!-- Case Study 1: AI Support Agent -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background: #0d0f17; border: 1px solid rgba(255, 255, 255, 0.08); transition: transform 0.2s ease;">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge px-3 py-1.5 rounded-pill" style="background: rgba(99, 102, 241, 0.15); color: #818cf8; border: 1px solid rgba(99, 102, 241, 0.3); font-size: 0.75rem;">AI AGENT SYSTEM</span>
                        <span class="text-success small fw-bold font-monospace">85% Automated</span>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">Autonomous 24/7 Customer Support Agent</h3>
                    <p class="text-secondary small mb-4">
                        Custom RAG-powered AI agent trained on internal knowledge base. Resolves user tickets across WhatsApp, Zendesk, and live chat with instant human-level reasoning.
                    </p>
                    <div class="d-flex flex-wrap gap-2 pt-3 border-top border-secondary border-opacity-25">
                        <span class="badge bg-dark border border-secondary text-secondary">n8n</span>
                        <span class="badge bg-dark border border-secondary text-secondary">OpenAI GPT-4o</span>
                        <span class="badge bg-dark border border-secondary text-secondary">Pinecone Vector DB</span>
                        <span class="badge bg-dark border border-secondary text-secondary">WhatsApp API</span>
                    </div>
                </div>
            </div>

            <!-- Case Study 2: Voice Outreach Agent -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background: #0d0f17; border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge px-3 py-1.5 rounded-pill" style="background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); font-size: 0.75rem;">VOICE AUTOMATION</span>
                        <span class="text-success small fw-bold font-monospace">3.8x Meeting Rate</span>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">Conversational AI Voice Qualification Bot</h3>
                    <p class="text-secondary small mb-4">
                        Sub-second latency voice assistant conducting inbound & outbound qualification calls. Books vetted appointments directly into Google Calendar and HubSpot CRM.
                    </p>
                    <div class="d-flex flex-wrap gap-2 pt-3 border-top border-secondary border-opacity-25">
                        <span class="badge bg-dark border border-secondary text-secondary">LiveKit Voice</span>
                        <span class="badge bg-dark border border-secondary text-secondary">Deepgram STT</span>
                        <span class="badge bg-dark border border-secondary text-secondary">ElevenLabs TTS</span>
                        <span class="badge bg-dark border border-secondary text-secondary">HubSpot CRM</span>
                    </div>
                </div>
            </div>

            <!-- Case Study 3: n8n Lead Pipeline -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background: #0d0f17; border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge px-3 py-1.5 rounded-pill" style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); font-size: 0.75rem;">CRM INTEGRATION</span>
                        <span class="text-success small fw-bold font-monospace">0s Lead Delay</span>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">Automated Multi-Channel Lead Enrichment Pipeline</h3>
                    <p class="text-secondary small mb-4">
                        Instant lead capture from Meta ads, automatic LinkedIn / Apollo profile enrichment, Slack alerts to sales reps, and personalized cold email sequences.
                    </p>
                    <div class="d-flex flex-wrap gap-2 pt-3 border-top border-secondary border-opacity-25">
                        <span class="badge bg-dark border border-secondary text-secondary">Make.com</span>
                        <span class="badge bg-dark border border-secondary text-secondary">GoHighLevel</span>
                        <span class="badge bg-dark border border-secondary text-secondary">Apollo API</span>
                        <span class="badge bg-dark border border-secondary text-secondary">Slack Webhooks</span>
                    </div>
                </div>
            </div>

            <!-- Case Study 4: AI Product Shoot -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background: #0d0f17; border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge px-3 py-1.5 rounded-pill" style="background: rgba(245, 158, 11, 0.15); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.3); font-size: 0.75rem;">AI CREATIVE</span>
                        <span class="text-success small fw-bold font-monospace">90% Cost Reduction</span>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">E-Commerce 3D Product Staging & Shoots</h3>
                    <p class="text-secondary small mb-4">
                        Transformed raw studio bottle & packaging photos into 50+ cinematic commercial advertising scenes without renting physical studio sets.
                    </p>
                    <div class="d-flex flex-wrap gap-2 pt-3 border-top border-secondary border-opacity-25">
                        <span class="badge bg-dark border border-secondary text-secondary">Stable Diffusion XL</span>
                        <span class="badge bg-dark border border-secondary text-secondary">ControlNet</span>
                        <span class="badge bg-dark border border-secondary text-secondary">ComfyUI</span>
                        <span class="badge bg-dark border border-secondary text-secondary">Photoshop Automation</span>
                    </div>
                </div>
            </div>

            <!-- SaaS Product 1: AutomatixQR -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background: #0d0f17; border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge px-3 py-1.5 rounded-pill" style="background: rgba(99, 102, 241, 0.15); color: #818cf8; border: 1px solid rgba(99, 102, 241, 0.3); font-size: 0.75rem;">LIVE SAAS PRODUCT</span>
                        <span class="badge bg-success text-white">Live Platform</span>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">AutomatixQR — Free Dynamic QR Studio</h3>
                    <p class="text-secondary small mb-3">
                        Enterprise QR generator featuring custom logo branding, dot matrices, editable dynamic URLs, and real-time scan telemetry dashboard.
                    </p>
                    <a href="https://qrcode.automatixes.com/" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3">
                        Launch qrcode.automatixes.com &rarr;
                    </a>
                </div>
            </div>

            <!-- SaaS Product 2: AutomatixInvoice -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-4 h-100" style="background: #0d0f17; border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge px-3 py-1.5 rounded-pill" style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); font-size: 0.75rem;">LIVE SAAS PRODUCT</span>
                        <span class="badge bg-success text-white">Live Platform</span>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">AutomatixInvoice — A4 PDF Financial Ledger</h3>
                    <p class="text-secondary small mb-3">
                        Clean browser-based invoice generator with dynamic math, multi-currency tax presets, saved clients directory, and instant vector PDF export.
                    </p>
                    <a href="https://invoicemaker.automatixes.com/" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3">
                        Launch invoicemaker.automatixes.com &rarr;
                    </a>
                </div>
            </div>

        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5 pt-4">
            <h3 class="h4 text-white fw-bold mb-3">Want custom automations built for your operations?</h3>
            <a href="contact" class="btn btn-brand rounded-pill px-5 py-3 fw-bold">
                Book a Free 15-Minute AI Audit &rarr;
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
