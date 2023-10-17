<?php $title = 'Empty Posts' ?>

<?php ob_start() ?>
    <h1>No Post</h1>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
