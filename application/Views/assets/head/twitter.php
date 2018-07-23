<?php $twitterTitle = 'EpicKris' ?>
<?php if (isset($title)) : ?>
    <?php $twitterTitle = $title ?>
<?php endif ?>
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@EpicKris" />
<meta name="twitter:title" content="<?= $twitterTitle ?>" />
