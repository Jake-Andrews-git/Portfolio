<?php
$siteTitle = $config['app']['name'] ?? 'Portfolio';
$pageTitle = $pageTitle ?? $siteTitle;
$baseUrl = rtrim($config['app']['base_url'] ?? '', '/');
$contactEmail = $config['contact']['email'] ?? '';
$githubUrl = $config['links']['github'] ?? '';
$linkedinUrl = $config['links']['linkedin'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="Personal portfolio of Jake Andrews, Computer Science student and developer.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        (function () {
            try {
                var storedTheme = localStorage.getItem('portfolio-theme');
                var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.dataset.theme = storedTheme || (prefersDark ? 'dark' : 'light');
            } catch (error) {
                document.documentElement.dataset.theme = 'light';
            }
        })();
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $baseUrl; ?>/css/styles.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#primaryNav" data-bs-offset="80" tabindex="0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top" id="primaryNav">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#home"><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <button class="theme-toggle ms-lg-3" type="button" data-theme-toggle aria-label="Switch to dark theme" aria-pressed="false">
                    <span class="theme-toggle-icon" aria-hidden="true"></span>
                    <span data-theme-toggle-label>Dark</span>
                </button>
            </div>
        </div>
    </nav>

    <main class="site-main">
        <?= $content ?? ''; ?>
    </main>

    <footer class="site-footer">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="text-muted">&copy; <?= date('Y'); ?> <?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8'); ?></span>
            <?php if ($contactEmail !== ''): ?>
                <a class="text-decoration-none" href="mailto:<?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>">Email me</a>
            <?php elseif ($linkedinUrl !== ''): ?>
                <a class="text-decoration-none" href="<?= htmlspecialchars($linkedinUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">LinkedIn</a>
            <?php elseif ($githubUrl !== ''): ?>
                <a class="text-decoration-none" href="<?= htmlspecialchars($githubUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">GitHub</a>
            <?php endif; ?>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php if ($linkedinUrl !== ''): ?>
        <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    <?php endif; ?>
    <script src="<?= $baseUrl; ?>/js/main.js"></script>
    <script>
        window.va = window.va || function () {
            (window.vaq = window.vaq || []).push(arguments);
        };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>
</body>
</html>
