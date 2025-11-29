    </main>
    <footer class="py-4 border-top mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="text-muted">&copy; <?= date('Y'); ?> <?= htmlspecialchars($config['app']['name'] ?? 'Jake Andrews', ENT_QUOTES, 'UTF-8'); ?></span>
            <a class="text-decoration-none small" href="mailto:<?= htmlspecialchars($config['contact']['email']['to'] ?? 'you@example.com', ENT_QUOTES, 'UTF-8'); ?>">Email me</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= rtrim($config['app']['base_url'] ?? '/', '/'); ?>/js/main.js"></script>
</body>
</html>

