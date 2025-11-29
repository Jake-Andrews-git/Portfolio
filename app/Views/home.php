<?php
/**
 * @var array $hero
 * @var array $about
 * @var array $skills
 * @var array $projects
 * @var array $experience
 * @var array|null $alerts
 */
?>
<?php if (!empty($alerts)): ?>
    <div class="container mt-4">
        <div class="alert alert-<?= htmlspecialchars($alerts['type'], ENT_QUOTES, 'UTF-8'); ?> alert-dismissible fade show" role="alert">
            <?= htmlspecialchars($alerts['message'], ENT_QUOTES, 'UTF-8'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="text-uppercase text-primary fw-semibold mb-2">Hello, I'm</p>
                <h1 class="display-4 fw-bold mb-3"><?= htmlspecialchars($hero['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <h2 class="h3 text-muted mb-4"><?= htmlspecialchars($hero['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p class="lead mb-4"><?= htmlspecialchars($hero['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
                <a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($hero['cta_target'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?= htmlspecialchars($hero['cta_text'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="hero-card p-4 rounded-4 shadow-sm">
                    <p class="mb-2 text-uppercase text-muted small">Quick facts</p>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($about['facts'] as $label => $value): ?>
                            <li class="py-2 border-bottom">
                                <span class="text-muted d-block small"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="fw-semibold"><?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5 bg-light-subtle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="section-title">About</h3>
                <p class="text-body-secondary fs-5"><?= htmlspecialchars($about['bio'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h4 class="mb-3">Skills</h4>
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($skills as $skill): ?>
                        <span class="badge rounded-pill text-bg-primary-subtle text-primary-emphasis px-3 py-2"><?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8'); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="py-5">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
            <div>
                <h3 class="section-title mb-1">Projects</h3>
                <p class="text-muted mb-0">Highlights of my recent work and experiments.</p>
            </div>
            <a class="btn btn-outline-primary" href="https://github.com/yourusername" target="_blank" rel="noopener">View GitHub</a>
        </div>
        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col-md-6 col-lg-4">
                    <?php include __DIR__ . '/components/project-card.php'; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="experience" class="py-5 bg-light-subtle">
    <div class="container">
        <h3 class="section-title mb-4">Experience</h3>
        <div class="row g-4">
            <?php foreach ($experience as $role): ?>
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <p class="text-primary fw-semibold mb-1"><?= htmlspecialchars($role['dates'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <h4 class="h5 mb-1"><?= htmlspecialchars($role['role'], ENT_QUOTES, 'UTF-8'); ?></h4>
                            <p class="text-muted mb-3"><?= htmlspecialchars($role['company'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <ul class="list-unstyled">
                                <?php foreach ($role['details'] as $detail): ?>
                                    <li class="d-flex align-items-start mb-2">
                                        <span class="text-primary me-2">•</span>
                                        <span><?= htmlspecialchars($detail, ENT_QUOTES, 'UTF-8'); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="contact" class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <h3 class="section-title">Contact</h3>
                <p class="text-body-secondary fs-5">I’m currently open to placement and internship opportunities. Send me a message and I’ll get back to you shortly.</p>
            </div>
            <div class="col-lg-7">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="/contact/submit" method="POST" novalidate>
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Your full name" required minlength="2">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="How can I help you?" required minlength="10"></textarea>
                            </div>
                            <div class="d-grid d-md-flex justify-content-md-end">
                                <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

