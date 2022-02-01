<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>
<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>
<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>
<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<?php echo Theme::css('css/bootstrap.css'); ?>

<meta property="og:title" content="<?php echo $site->title() ?>">
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $site->description() ?>">
<meta property="og:image" content="<?php echo Theme::src('img/cover.jpg') ?>">
<meta name="twitter:card" content="summary_large_image">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/99398214e6.js" crossorigin="anonymous"></script>
<!-- Site head plugins -->
<?php Theme::plugins('siteHead'); ?>