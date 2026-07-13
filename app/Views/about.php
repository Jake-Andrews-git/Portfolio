<?php
$about = $portfolio['about'] ?? [];
$skills = $portfolio['skills'] ?? [];
$skillCategories = $portfolio['skill_categories'] ?? [];
?>
<section id="about" class="section-padding bg-light-subtle">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <p class="text-uppercase text-primary fw-semibold mb-2">About</p>
                <h3 class="section-title"><?= htmlspecialchars($about['heading'] ?? 'A little about me', ENT_QUOTES, 'UTF-8'); ?></h3>
                <?php foreach (($about['body'] ?? []) as $index => $paragraph): ?>
                    <p class="text-body-secondary<?= $index === 0 ? ' fs-5' : ''; ?>">
                        <?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-6">
                <div class="skills-card p-4 rounded-4 shadow-sm bg-white">
                    <h4 class="mb-3">Key Skills</h4>
                    <?php if (!empty($skillCategories)): ?>
                        <?php foreach ($skillCategories as $category => $categorySkills): ?>
                            <div class="mb-3">
                                <p class="text-uppercase small fw-semibold text-muted mb-2"><?= htmlspecialchars((string) $category, ENT_QUOTES, 'UTF-8'); ?></p>
                                <div class="d-flex flex-wrap gap-2">
                                    <?php foreach ($categorySkills as $skill): ?>
                                        <span class="badge rounded-pill text-bg-primary-subtle text-primary-emphasis px-3 py-2">
                                            <?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8'); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="d-flex flex-wrap gap-2">
                            <?php foreach ($skills as $skill): ?>
                                <span class="badge rounded-pill text-bg-primary-subtle text-primary-emphasis px-3 py-2">
                                    <?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
