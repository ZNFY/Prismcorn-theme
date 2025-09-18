<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('Category: %s'),
            'search'    =>  _t('Search Results for: %s'),
            'tag'       =>  _t('Tag: %s'),
            'author'    =>  _t('Author: %s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <?php $this->header(); ?>
</head>
<body class="bg-light">

<header class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                    <a class="nav-link<?php if($this->is('index')): ?> active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>">Home</a>
                </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <li class="nav-item">
                    <a class="nav-link<?php if($this->is('page', $pages->slug)): ?> active<?php endif; ?>" href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                </li>
                <?php endwhile; ?>
            </ul>
            <form class="d-flex" method="post" action="<?php $this->options->siteUrl(); ?>">
                <input class="form-control form-control-sm me-2" type="search" name="s" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
    </div>
</header>