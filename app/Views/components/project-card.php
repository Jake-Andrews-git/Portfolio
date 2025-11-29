<article class="card project-card h-100 border-0 shadow-sm">
    <div class="card-body d-flex flex-column">
        <p class="text-muted small text-uppercase mb-2">Project</p>
        <h4 class="card-title h5"><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?></h4>
        <p class="card-text text-body-secondary flex-grow-1"><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
        <div class="mb-3">
            <?php foreach ($project['tech'] as $tech): ?>
                <span class="badge rounded-pill text-bg-secondary-subtle text-secondary-emphasis me-1 mb-1"><?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?></span>
            <?php endforeach; ?>
        </div>
        <div class="d-flex gap-2 mt-auto">
            <?php if (!empty($project['github'])): ?>
                <a class="btn btn-outline-primary btn-sm" href="<?= htmlspecialchars($project['github'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">GitHub</a>
            <?php endif; ?>
            <?php if (!empty($project['demo'])): ?>
                <a class="btn btn-primary btn-sm" href="<?= htmlspecialchars($project['demo'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Live Demo</a>
            <?php endif; ?>
        </div>
    </div>
</article>

