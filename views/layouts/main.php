<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>


<div id="wrapper">
    <?php require_once('lyt_sidebar.php')?>
    <?php require_once('lyt_content.php')?>
</div>
<?php require_once('lyt_scroll.php')?>

<?php require_once('lyt_modal.php')?>


<?= $this->blocks['bodyEndScript'] ?? '' ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
