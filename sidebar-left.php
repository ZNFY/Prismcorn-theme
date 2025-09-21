<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar-inner sticky-top">
    <div class="card text-center">
        <div class="card-body">
            <?php
            $gravatarHash = '*************************';
            $gravatarUrl = 'https://secure.gravatar.com/avatar/' . $gravatarHash . '?s=120&d=mm';
            ?>
            <img src="<?php echo $gravatarUrl; ?>" class="rounded-circle mb-3" alt="Avatar" width="120" height="120">
            <h5 class="card-title"><?php $this->author->screenName(); ?></h5>
            <p class="card-text text-muted"><?php $this->options->description() ?></p>
            
            <div class="social-links">
                <?php if ($this->options->githubUrl): ?>
                    <a href="<?php $this->options->githubUrl(); ?>" class="btn btn-sm btn-outline-secondary m-1">GitHub</a>
                <?php endif; ?>
                <?php if ($this->options->twitterUrl): ?>
                    <a href="<?php $this->options->twitterUrl(); ?>" class="btn btn-sm btn-outline-secondary m-1">Twitter</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if ($this->user->hasLogin()): ?>
        <div class="d-grid mt-2">
            <a href="<?php $this->options->adminUrl(); ?>" class="btn btn-primary btn-sm">进入后台</a>
        </div>
    <?php endif; ?>
</div>