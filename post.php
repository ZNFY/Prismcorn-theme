<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="container-fluid">
    <div class="row">
        <aside class="col-lg-3 d-none d-lg-block">
            <?php $this->need('sidebar-left.php'); ?>
        </aside>

        <main class="col-lg-6 col-md-12">
            <div class="main-content-inner">
                <article class="post-full card">
                     <div class="card-body">
                        <h1 class="post-title card-title"><?php $this->title() ?></h1>
                        <div class="post-meta mb-3 text-muted">
                            <span><?php $this->date('F j, Y'); ?></span> |
                            <span><?php $this->category(','); ?></span> |
                            <span><?php $this->author(); ?></span>
                        </div>
                        <div class="post-content">
                            <?php $this->content(); ?>
                        </div>
                    </div>
                </article>

                <?php $this->need('comments.php'); ?>
            </div>
        </main>

        <aside class="col-lg-3 d-none d-lg-block">
            <div class="card mb-4 sticky-top" id="toc-card" style="display: none;">
                <div class="card-header">Table of Contents</div>
                <div class="card-body">
                    <ul id="toc-list" class="list-unstyled"></ul>
            </div>
        </div>
             <?php $this->need('sidebar.php'); ?>
        </aside>
    </div>
</div>

<?php $this->need('footer.php'); ?>