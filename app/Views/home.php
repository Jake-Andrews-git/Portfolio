<?php
/**
 * @var array|null $alerts
 */
?>
<?php if (!empty($alerts)): ?>
    <div class="container alert-container">
        <div class="alert alert-<?= htmlspecialchars($alerts['type'], ENT_QUOTES, 'UTF-8'); ?> alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($alerts['message'], ENT_QUOTES, 'UTF-8'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="text-uppercase text-primary fw-semibold mb-2">Hello, I'm</p>
                <h1 class="display-4 fw-bold mb-3">Jake Andrews</h1>
                <h2 class="h3 text-muted mb-4">Computer Science Student &amp; Developer</h2>
                <p class="lead mb-4">I’m a second-year BSc (Hons) Computer Science student at the University of Salford. I love building clean, scalable experiences across the stack.</p>
                <a class="btn btn-primary btn-lg" href="#projects">View Projects</a>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="hero-card p-4 rounded-4 shadow-sm">
                    <p class="mb-2 text-uppercase text-muted small">Quick facts</p>
                    <ul class="list-unstyled mb-0">
                        <li class="py-2 border-bottom">
                            <span class="text-muted d-block small">University</span>
                            <span class="fw-semibold">University of Salford, UK</span>
                        </li>
                        <li class="py-2 border-bottom">
                            <span class="text-muted d-block small">Course</span>
                            <span class="fw-semibold">BSc (Hons) Computer Science</span>
                        </li>
                        <li class="py-2">
                            <span class="text-muted d-block small">Graduation</span>
                            <span class="fw-semibold">Expected 2026</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/about.php'; ?>
<?php include __DIR__ . '/projects.php'; ?>
<?php include __DIR__ . '/experience.php'; ?>
<?php include __DIR__ . '/contact.php'; ?>

