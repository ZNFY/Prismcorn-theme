<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="footer mt-auto py-3 bg-white text-center border-top">
    <div class="container">
        <span class="text-muted">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</span>
        <span class="text-muted">Theme by Prismcorn.</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tocCard = document.getElementById('toc-card');
    const tocList = document.getElementById('toc-list');
    const postContent = document.querySelector('.post-full .post-content');

    if (!postContent || !tocList) return;

    const headings = postContent.querySelectorAll('h2, h3');
    if (headings.length < 2) return; // Only show TOC if there are enough headings

    headings.forEach((heading, index) => {
        const id = 'toc-heading-' + index;
        heading.setAttribute('id', id);

        const listItem = document.createElement('li');
        const link = document.createElement('a');
        link.setAttribute('href', '#' + id);
        link.textContent = heading.textContent;

        // Indent H3 titles
        if (heading.tagName === 'H3') {
            listItem.style.paddingLeft = '1.5rem';
        }

        listItem.appendChild(link);
        tocList.appendChild(listItem);
    });

    tocCard.style.display = 'block'; // Show the TOC card
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('pre').forEach(function(pre) {
        const code = pre.querySelector('code');
        if (!code) return;

        const button = document.createElement('button');
        button.className = 'copy-code-button';
        button.textContent = 'Copy';
        pre.appendChild(button);

        button.addEventListener('click', function() {
            navigator.clipboard.writeText(code.innerText).then(function() {
                button.textContent = 'Copied!';
                setTimeout(function() {
                    button.textContent = 'Copy';
                }, 2000);
            });
        });
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/components/prism-core.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

<script>
    (function() {
        const htmlElement = document.documentElement;
        const toggleButton = document.getElementById('dark-mode-toggle');

        // Function to set theme
        function setTheme(theme) {
            htmlElement.setAttribute('data-bs-theme', theme);
            localStorage.setItem('theme', theme);
        }

        // Check for saved theme in localStorage on page load
        const savedTheme = localStorage.getItem('theme') || 'light';
        setTheme(savedTheme);

        // Button click event
        toggleButton.addEventListener('click', function() {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
        });
    })();
</script>

<?php $this->footer(); ?>
</body>
</html>