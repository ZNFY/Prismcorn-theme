<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="footer mt-auto py-3 bg-white text-center border-top">
    <div class="container">
        <span class="text-muted">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</span>
        <span class="text-muted">Theme by Prismcorn.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php $this->footer(); ?>
</body>
</html>