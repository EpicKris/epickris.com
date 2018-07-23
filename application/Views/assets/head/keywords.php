<?php if (isset($keywords)) : ?>
    <?php $keywords = array_merge($defaultKeywords, $keywords) ?>
<?php else : ?>
    <?php $keywords = $defaultKeywords ?>
<?php endif ?>
<meta name="keywords" content="<?= implode(', ', $keywords) ?>">
