<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    // 左侧边栏社交链接
    $githubUrl = new Typecho_Widget_Helper_Form_Element_Text('githubUrl', NULL, NULL, _t('GitHub 地址'), _t('在这里输入您的 GitHub 个人主页链接'));
    $form->addInput($githubUrl);

    $twitterUrl = new Typecho_Widget_Helper_Form_Element_Text('twitterUrl', NULL, NULL, _t('Twitter 地址'), _t('在这里输入您的 Twitter 个人主页链接'));
    $form->addInput($twitterUrl);
}