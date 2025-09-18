<?php
/**
 * 一个简约干净的主题.
 *
 * @package Prismcorn
 * @author ZNFY
 * @version 1.0
 * @link https://blog.ymzj233..com
 */

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
                <?php while($this->next()): ?>
                <article class="post-card mb-4 card">
                    <div class="card-body">
                        <h2 class="post-title card-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                        <div class="post-meta mb-2 text-muted">
                            <span><?php $this->date('F j, Y'); ?></span> |
                            <span><?php $this->category(','); ?></span> |
                            <span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a></span>
                        </div>
                        <div class="post-content card-text">
                            <?php $this->excerpt(150, '...'); ?>
                        </div>
                         <a href="<?php $this->permalink() ?>" class="btn btn-outline-primary btn-sm mt-3">Read More</a>
                    </div>
                </article>
                <?php endwhile; ?>

                <nav class="pagination-nav">
                    <?php $this->pageNav('&laquo; Prev', 'Next &raquo;', 3, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination justify-content-center', 'itemTag' => 'li', 'itemClass' => 'page-item', 'linkClass' => 'page-link', 'currentClass' => 'active')); ?>
                </nav>
            </div>
        </main>

        <aside class="col-lg-3 d-none d-lg-block">
             <?php $this->need('sidebar.php'); ?>
        </aside>
    </div>
</div>

<?php $this->need('footer.php'); ?>