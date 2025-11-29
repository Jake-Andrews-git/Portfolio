<section id="projects" class="section-padding">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
            <div>
                <p class="text-uppercase text-primary fw-semibold mb-2">Projects</p>
                <h3 class="section-title mb-1">Recent work</h3>
                <p class="text-muted mb-0">Highlights of the things I’ve been experimenting with lately.</p>
            </div>
            <a class="btn btn-outline-primary" href="https://github.com/yourusername" target="_blank" rel="noopener">View GitHub</a>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="card h-100 project-card border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title h5 mb-2">Repository Visualisation Web Application</h4>
                        <p class="card-text text-body-secondary flex-grow-1">
                            Interactive analytics dashboard that surfaces contributor trends, commit activity,
                            and repository health indicators using live GitHub data.
                        </p>
                        <div class="mb-3">
                            <?php
                            $techStack = ['FastAPI', 'Bootstrap', 'Plotly.js', 'PostgreSQL'];
                            foreach ($techStack as $tech): ?>
                                <span class="badge rounded-pill text-bg-secondary-subtle text-secondary-emphasis me-1 mb-1">
                                    <?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <div class="d-flex gap-2">
                            <a class="btn btn-outline-primary btn-sm" href="https://github.com/yourusername/repo-visualisation" target="_blank" rel="noopener">GitHub</a>
                            <button class="btn btn-primary btn-sm" type="button" disabled>Live Demo</button>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="card h-100 project-card border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title h5 mb-2">Portfolio CMS (Placeholder)</h4>
                        <p class="card-text text-body-secondary flex-grow-1">
                            Modular CMS concept for powering dynamic sections of this portfolio. Replace this
                            description with a real project when you’re ready.
                        </p>
                        <div class="mb-3">
                            <?php
                            $techStack = ['PHP', 'SQLite', 'Bootstrap'];
                            foreach ($techStack as $tech): ?>
                                <span class="badge rounded-pill text-bg-secondary-subtle text-secondary-emphasis me-1 mb-1">
                                    <?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm" type="button" disabled>GitHub</button>
                            <button class="btn btn-secondary btn-sm" type="button" disabled>Live Demo</button>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="card h-100 project-card border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title h5 mb-2">Data Storytelling Toolkit (Placeholder)</h4>
                        <p class="card-text text-body-secondary flex-grow-1">
                            Reserved space for another favourite build—maybe a Python/Plotly data story or a
                            Java microservice. Swap in details when ready.
                        </p>
                        <div class="mb-3">
                            <?php
                            $techStack = ['Python', 'Plotly', 'FastAPI'];
                            foreach ($techStack as $tech): ?>
                                <span class="badge rounded-pill text-bg-secondary-subtle text-secondary-emphasis me-1 mb-1">
                                    <?= htmlspecialchars($tech, ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-secondary btn-sm" type="button" disabled>GitHub</button>
                            <button class="btn btn-secondary btn-sm" type="button" disabled>Live Demo</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

