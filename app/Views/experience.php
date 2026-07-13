<?php
$roles = $portfolio['experience'] ?? [];
$education = $portfolio['education'] ?? [];
?>
<section id="experience" class="section-padding bg-light-subtle">
    <div class="container">
        <p class="text-uppercase text-primary fw-semibold mb-2">Experience</p>
        <h3 class="section-title mb-4">Education and work</h3>
        <?php if (!empty($education)): ?>
            <div class="row g-4 mb-4">
                <?php foreach ($education as $item): ?>
                    <div class="col-md-6">
                        <article class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <p class="text-uppercase small fw-semibold text-primary mb-1">Education</p>
                                <h4 class="h5 mb-1"><?= htmlspecialchars($item['institution'], ENT_QUOTES, 'UTF-8'); ?></h4>
                                <p class="text-body-secondary mb-2"><?= htmlspecialchars($item['award'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <span class="badge text-bg-primary-subtle text-primary-emphasis"><?= htmlspecialchars($item['dates'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="row g-4">
            <?php foreach ($roles as $role): ?>
                <div class="col-md-6">
                    <article class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-xl-row justify-content-between align-items-start gap-2 mb-2">
                                <div>
                                    <h4 class="h5 mb-1"><?= htmlspecialchars($role['role'], ENT_QUOTES, 'UTF-8'); ?></h4>
                                    <p class="text-muted mb-0"><?= htmlspecialchars($role['company'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <span class="badge text-bg-primary-subtle text-primary-emphasis"><?= htmlspecialchars($role['dates'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <?php foreach (($role['details'] ?? []) as $detail): ?>
                                    <li class="d-flex align-items-start mb-2">
                                        <span class="experience-dot me-2"></span>
                                        <span><?= htmlspecialchars($detail, ENT_QUOTES, 'UTF-8'); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
            <div class="col-md-6">
                <article class="card border-0 shadow-sm h-100 next-step-card">
                    <div class="card-body">
                        <p class="text-uppercase small fw-semibold text-primary mb-1">Next step</p>
                        <h4 class="h5 mb-2">Graduate software engineering role</h4>
                        <p class="text-body-secondary mb-0">
                            I am seeking graduate opportunities in software engineering, backend development, cloud engineering, or cyber security.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
