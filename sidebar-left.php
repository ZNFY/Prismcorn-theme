<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar-inner sticky-top">
    <div class="card text-center">
        <div class="card-body">
            <img src="https://secure.gravatar.com/avatar/?s=150&d=mm" class="rounded-circle mb-3" alt="Avatar" width="120" height="120">
            <h5 class="card-title"><?php $this->author->screenName(); ?></h5>
            <p class="card-text text-muted"><?php $this->options->description() ?></p>
            
            <div class="social-links">
                <a href="#" class="btn btn-sm btn-outline-secondary m-1">GitHub</a>
                <a href="#" class="btn btn-sm btn-outline-secondary m-1">Twitter</a>
            </div>
        </div>
    </div>
</div>