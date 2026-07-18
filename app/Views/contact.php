<?php
$contactEmail = $config['contact']['email'] ?? '';
$githubUrl = $config['links']['github'] ?? '';
$linkedinUrl = $config['links']['linkedin'] ?? '';
?>
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <p class="text-uppercase text-primary fw-semibold mb-2">Contact</p>
                <h3 class="section-title">Let's build something</h3>
                <p class="text-body-secondary fs-5">
                    I am currently seeking graduate opportunities in software engineering, backend development, cloud engineering, and cyber security.
                </p>
            </div>
            <div class="col-lg-7">
                <article class="card border-0 shadow-sm contact-card">
                    <div class="card-body p-4 p-lg-5">
                        <p class="text-uppercase small fw-semibold text-primary mb-2">Open to opportunities</p>
                        <h4 class="h5 mb-3">Graduate, backend, cloud, and security conversations</h4>
                        <p class="text-body-secondary mb-4">
                            I can share more detail about the work on this site, talk through code samples, or discuss how I could support your team.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-2">
                            <?php if ($contactEmail !== ''): ?>
                                <a class="btn btn-primary btn-lg" href="mailto:<?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>?subject=Portfolio%20enquiry">Email Jake</a>
                            <?php endif; ?>
                            <?php if ($githubUrl !== ''): ?>
                                <a class="btn btn-outline-primary btn-lg" href="<?= htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">View GitHub</a>
                            <?php endif; ?>
                            <?php if ($linkedinUrl !== ''): ?>
                                <a class="btn btn-outline-primary btn-lg" href="<?= htmlspecialchars($linkedinUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">LinkedIn</a>
                            <?php endif; ?>
                            <?php if ($contactEmail === '' && $githubUrl === '' && $linkedinUrl === ''): ?>
                                <span class="text-body-secondary">Contact details available on request.</span>
                            <?php endif; ?>
                        </div>
                        <?php if ($linkedinUrl !== ''): ?>
                            <div class="linkedin-profile-badge mt-4">
                                <div class="linkedin-profile-badge__theme linkedin-profile-badge__theme--light">
                                    <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="HORIZONTAL" data-vanity="jake-andrews-4906233a6" data-version="v1">
                                        <a class="badge-base__link LI-simple-link" href="https://uk.linkedin.com/in/jake-andrews-4906233a6?trk=profile-badge" target="_blank" rel="noopener">Jake Andrews</a>
                                    </div>
                                </div>
                                <div class="linkedin-profile-badge__theme linkedin-profile-badge__theme--dark">
                                    <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="dark" data-type="HORIZONTAL" data-vanity="jake-andrews-4906233a6" data-version="v1">
                                        <a class="badge-base__link LI-simple-link" href="https://uk.linkedin.com/in/jake-andrews-4906233a6?trk=profile-badge" target="_blank" rel="noopener">Jake Andrews</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
