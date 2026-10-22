<?php
    function loadArticle($id) {
        return R::load('articles', $id);
    }
    
    function getAllArticles() {
        return R::findAll('articles');
    }
    
    function getArticlesByType($type) {
        return R::find('articles', 'type = ? AND active = true ORDER BY ordering ASC', array($type));
    }
?>