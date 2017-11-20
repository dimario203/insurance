<?php
/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\assets\ThemeAsset;
use frontend\assets\DesigneAsset;
use yeesoft\models\Menu;
use yeesoft\widgets\LanguageSelector;
use yeesoft\widgets\Nav as Navigation;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yeesoft\comment\widgets\RecentComments;
use frontend\widgets\NavMenu;
use frontend\widgets\Footer;
use frontend\assets\PopperAsset;

//Yii::$app->assetManager->forceCopy = true;
//AppAsset::register($this);
//ThemeAsset::register($this);
PopperAsset::register($this);
DesigneAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?= $this->renderMetaTags()?>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column">
<?php $this->beginBody() ?>


    <?=NavMenu::widget() ?>

    <?php
    if(Yii::$app->controller->module->id=='auth' && Yii::$app->controller->action->id=='login'){?>
        <div class="layout-login-form">
            <?= $content ?>
        </div>
    <?php
    } else {?>
        <section class="container-fluid flex-grow">
            <?= $content ?>
        </section>
   <?php
    }
    ?>

    <?=Footer::widget() ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
