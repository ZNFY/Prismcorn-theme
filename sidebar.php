<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar-inner sticky-top">
    <div class="card mb-4">
        <div class="card-header">Recent Posts</div>
        <ul class="list-group list-group-flush">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li class="list-group-item"><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>

    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <ul class="list-group list-group-flush">
            <?php $this->widget('Widget_Metas_Category_List')
            ->parse('<li class="list-group-item"><a href="{permalink}">{name}</a> <span class="badge bg-secondary float-end">{count}</span></li>'); ?>
        </ul>
    </div>
    
     <div class="card mb-4">
        <div class="card-header">Archives</div>
        <ul class="list-group list-group-flush">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li class="list-group-item"><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>
</div>