<?php
/**
 * @var array|null $alerts
 * @var array $portfolio
 */
$hero = $portfolio['hero'] ?? [];
$facts = $portfolio['facts'] ?? [];
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
                <p class="text-uppercase text-primary fw-semibold mb-2"><?= htmlspecialchars($hero['eyebrow'] ?? "Hello, I'm", ENT_QUOTES, 'UTF-8'); ?></p>
                <h1 class="display-4 fw-bold mb-3"><?= htmlspecialchars($hero['name'] ?? 'Jake Andrews', ENT_QUOTES, 'UTF-8'); ?></h1>
                <h2 class="h3 text-muted mb-4"><?= htmlspecialchars($hero['title'] ?? 'First Class Honours Computer Science Graduate', ENT_QUOTES, 'UTF-8'); ?></h2>
                <p class="lead mb-4"><?= htmlspecialchars($hero['tagline'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                <a class="btn btn-primary btn-lg" href="<?= htmlspecialchars($hero['cta_target'] ?? '#projects', ENT_QUOTES, 'UTF-8'); ?>">
                    <?= htmlspecialchars($hero['cta_text'] ?? 'View Projects', ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="hero-card p-4 rounded-4 shadow-sm">
                    <p class="mb-2 text-uppercase text-muted small">Quick facts</p>
                    <ul class="list-unstyled mb-0">
                        <?php $factIndex = 0; ?>
                        <?php foreach ($facts as $label => $value): ?>
                            <?php $factIndex++; ?>
                            <li class="py-2<?= $factIndex < count($facts) ? ' border-bottom' : ''; ?>">
                                <span class="text-muted d-block small"><?= htmlspecialchars((string) $label, ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="fw-semibold"><?= htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'); ?></span>
                            </li>
                        <?php endforeach; ?>
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
