<section id="about" class="section-padding bg-light-subtle">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <p class="text-uppercase text-primary fw-semibold mb-2">About</p>
                <h3 class="section-title">A little about me</h3>
                <p class="text-body-secondary fs-5">
                    I’m a curious developer who enjoys experimenting with backend APIs, data visualisation,
                    and front-end polish. My current focus is building a strong foundation in software engineering
                    so I can deliver production-ready features during internships and placements.
                </p>
                <p class="text-body-secondary">
                    Outside of coursework, I volunteer on collaborative projects and hackathons where I can
                    practice shipping ideas quickly while maintaining quality.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="skills-card p-4 rounded-4 shadow-sm bg-white">
                    <h4 class="mb-3">Key Skills</h4>
                    <div class="d-flex flex-wrap gap-2">
                        <?php
                        $skills = [
                            'Java', 'Python', 'PHP', 'HTML', 'CSS', 'JavaScript',
                            'SQL', 'Bootstrap', 'Flask', 'FastAPI', 'Git', 'GitHub',
                        ];
                        foreach ($skills as $skill): ?>
                            <span class="badge rounded-pill text-bg-primary-subtle text-primary-emphasis px-3 py-2">
                                <?= htmlspecialchars($skill, ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

