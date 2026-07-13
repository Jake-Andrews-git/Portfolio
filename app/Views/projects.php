<?php
$projects = $portfolio['projects'] ?? [];
$caseStudies = $portfolio['case_studies'] ?? [];
$githubUrl = $config['links']['github'] ?? '';
$liveUrl = $config['links']['live'] ?? '';
?>
<section id="projects" class="section-padding">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
            <div>
                <p class="text-uppercase text-primary fw-semibold mb-2">Projects</p>
                <h3 class="section-title mb-1">Recent work</h3>
                <p class="text-muted mb-0">Evidence-backed highlights from the projects I am shaping into case studies.</p>
            </div>
            <?php if ($githubUrl !== ''): ?>
                <a class="btn btn-outline-primary" href="<?= htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">View GitHub</a>
            <?php endif; ?>
        </div>
        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
                <?php
                if (($project['name'] ?? '') === 'Portfolio Website' && ($project['demo'] ?? '') === '' && $liveUrl !== '') {
                    $project['demo'] = $liveUrl;
                }
                ?>
                <div class="col-md-6 col-lg-4">
                    <?php include __DIR__ . '/components/project-card.php'; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (!empty($caseStudies)): ?>
            <div class="case-study-band mt-5">
                <div class="mb-4">
                    <p class="text-uppercase text-primary fw-semibold mb-2">Case studies</p>
                    <h3 class="section-title mb-1">How the work was shaped</h3>
                    <p class="text-muted mb-0">Short writeups that connect each project to the problem, implementation approach, and outcome.</p>
                </div>
                <div class="row g-4">
                    <?php foreach ($caseStudies as $caseStudy): ?>
                        <?php $hasEvidence = !empty($caseStudy['image']); ?>
                        <div class="<?= $hasEvidence ? 'col-12' : 'col-lg-6'; ?>">
                            <article class="case-study h-100<?= $hasEvidence ? ' case-study-with-evidence' : ''; ?>">
                                <div class="case-study-copy">
                                    <p class="text-uppercase text-primary fw-semibold small mb-2">Case study</p>
                                    <h4 class="h5 mb-2"><?= htmlspecialchars($caseStudy['name'], ENT_QUOTES, 'UTF-8'); ?></h4>
                                    <p class="case-study-summary"><?= htmlspecialchars($caseStudy['summary'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <div class="case-study-detail">
                                        <span>Problem</span>
                                        <p><?= htmlspecialchars($caseStudy['problem'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                    <div class="case-study-detail">
                                        <span>Approach</span>
                                        <p><?= htmlspecialchars($caseStudy['approach'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                    <div class="case-study-detail">
                                        <span>Outcome</span>
                                        <p><?= htmlspecialchars($caseStudy['outcome'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                </div>
                                <?php if (!empty($caseStudy['image'])): ?>
                                    <figure class="case-study-evidence">
                                        <img
                                            class="case-study-image"
                                            src="<?= htmlspecialchars($caseStudy['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                            alt="<?= htmlspecialchars($caseStudy['image_alt'] ?? $caseStudy['name'], ENT_QUOTES, 'UTF-8'); ?>"
                                            loading="lazy"
                                        >
                                        <figcaption>Project screenshot</figcaption>
                                    </figure>
                                <?php endif; ?>
                                <div class="case-study-actions">
                                    <div class="d-flex flex-wrap gap-2">
                                        <?php foreach (($caseStudy['tech'] ?? []) as $tech): ?>
                                            <span class="badge rounded-pill text-bg-success-subtle text-success-emphasis">
                                                <?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php if (!empty($caseStudy['github'])): ?>
                                        <a
                                            class="btn btn-outline-primary btn-sm"
                                            href="<?= htmlspecialchars($caseStudy['github'], ENT_QUOTES, 'UTF-8'); ?>"
                                            target="_blank"
                                            rel="noopener"
                                        >GitHub</a>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
