<?php 
$page_key = 'blog-detail'; 

// 1. Get and sanitize the blog ID
$id = isset($_GET['id']) ? preg_replace('/[^a-zA-Z0-9\-]/', '', $_GET['id']) : '';
$file_path = __DIR__ . "/content/articles/{$id}.md";

// 2. Validate file exists
if (empty($id) || !file_exists($file_path)) {
    include 'header.php';
    echo '<div class="container text-center py-5 my-5">
            <h1 class="display-1 fw-bold text-dark">404</h1>
            <p class="lead text-secondary">Blog article not found.</p>
            <a href="blogs" class="btn btn-brand mt-3">Back to Blogs</a>
          </div>';
    include 'footer.php';
    exit;
}

// 3. Read and parse the Markdown file
$content = file_get_contents($file_path);
$parts = explode('---', $content, 3);

$frontmatter = isset($parts[1]) ? $parts[1] : '';
$raw_body = isset($parts[2]) ? $parts[2] : $content;

// Parse metadata
$title = preg_match('/title:\s*"([^"]+)"/', $frontmatter, $matches) ? $matches[1] : 'Untitled';
$category = preg_match('/category:\s*"([^"]+)"/', $frontmatter, $matches) ? ucfirst(trim($matches[1])) : 'General';
$date = preg_match('/date:\s*"([^"]+)"/', $frontmatter, $matches) ? $matches[1] : date('Y-m-d');
$author = preg_match('/author:\s*"([^"]+)"/', $frontmatter, $matches) ? $matches[1] : 'Automatixes';
$image = preg_match('/image:\s*"([^"]+)"/', $frontmatter, $matches) ? $matches[1] : 'assets/img/services/ai_agents.jpg';

if (strpos($image, '/') === 0) {
    $image = ltrim($image, '/');
}

// Extract HTML body if it's a full HTML document
if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $raw_body, $body_match)) {
    $html_body = $body_match[1];
} else {
    // If n8n just sent raw text without body tags, use it directly
    $html_body = $raw_body;
}

// Dynamically override header metadata for this specific blog
$meta_config = [
    'blog-detail' => [
        'title' => $title . ' | Automatixes',
        'desc' => substr(strip_tags($html_body), 0, 150) . '...',
        'keywords' => $category . ', Automatixes Blog, Automation',
        'url' => 'blog-detail?id=' . $id
    ]
];

include 'header.php'; 
?>

<!-- Blog Header -->
<section class="subpage-hero position-relative pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="badge bg-surface-1 border border-secondary text-accent-brand rounded-pill px-3 py-2 fw-semibold mb-3">
                    <?php echo htmlspecialchars($category); ?>
                </span>
                <h1 class="display-5 fw-extrabold text-white mb-4"><?php echo htmlspecialchars($title); ?></h1>
                <div class="d-flex align-items-center justify-content-center text-white-50 mb-5">
                    <div class="d-flex align-items-center me-4">
                        <img src="assets/img/logo/icon_light.jpg" alt="<?php echo htmlspecialchars($author); ?>" class="rounded-circle me-2" style="width: 32px; height: 32px; border: 1px solid rgba(255,255,255,0.2);">
                        <span class="fw-semibold text-white"><?php echo htmlspecialchars($author); ?></span>
                    </div>
                    <div>
                        <i class="fa-regular fa-calendar me-1 text-accent-brand"></i> <?php echo date('F j, Y', strtotime($date)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="pb-5 bg-surface text-white">
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <!-- Featured Image -->
                <img src="<?php echo htmlspecialchars($image); ?>" class="img-fluid rounded-4 shadow mb-5 w-100 object-fit-cover border border-secondary border-opacity-25" alt="<?php echo htmlspecialchars($title); ?>" style="max-height: 500px;" onerror="this.src='assets/img/services/ai_agents.jpg'">
                
                <!-- Article Body -->
                <div class="article-body text-white-50" style="font-size: 1.15rem; line-height: 1.9;">
                    <?php 
                    // Output the extracted HTML safely (assuming n8n generates safe HTML)
                    // We remove h1 since we already rendered the title above
                    $html_body = preg_replace('/<h1[^>]*>.*?<\/h1>/is', '', $html_body);
                    echo $html_body; 
                    ?>

                    <!-- Share & Tags -->
                    <div class="d-flex justify-content-between align-items-center border-top border-secondary border-opacity-25 pt-4 mt-5">
                        <div class="tags">
                            <span class="badge bg-surface-1 text-accent-brand border border-secondary border-opacity-25 me-2">#<?php echo htmlspecialchars($category); ?></span>
                            <span class="badge bg-surface-1 text-accent-brand border border-secondary border-opacity-25 me-2">#Automation</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <span class="fw-semibold me-3 text-white">Share:</span>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle me-2" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle me-2" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-surface-1 text-white border-top border-secondary border-opacity-25">
    <div class="container py-4 text-center">
        <h2 class="fw-bold text-white mb-3">Ready to deploy your own AI Agent?</h2>
        <p class="mb-4 text-white-50 max-width-600 mx-auto">Book a free consultation and let's discuss how custom AI automation can save you time and scale your operations.</p>
        <a href="contact" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Book a Call <i class="fa-solid fa-arrow-right ms-2"></i></a>
    </div>
</section>

<!-- Article Styling Overrides -->
<style>
    .article-body h2, .article-body h3, .article-body h4 {
        color: #ffffff !important;
        font-weight: 700;
        margin-top: 2.2rem;
        margin-bottom: 1rem;
    }
    .article-body p {
        color: rgba(255, 255, 255, 0.75) !important;
        margin-bottom: 1.5rem;
    }
    .article-body strong {
        color: #ffffff !important;
    }
    .article-body ul, .article-body ol {
        color: rgba(255, 255, 255, 0.75) !important;
        margin-bottom: 1.5rem;
        padding-left: 2rem;
    }
    .article-body li {
        margin-bottom: 0.5rem;
    }
    .article-body a {
        color: var(--accent-neon) !important;
        text-decoration: underline;
    }
</style>

<?php include 'footer.php'; ?>


