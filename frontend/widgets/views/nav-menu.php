<nav class="navbar navbar-dark navbar-expand-smd bg-red py-3">
    <div class="container">
        <a href="/" class="navbar-brand"><img src="images/logo.png"></a>
        <div class="navbar-collapse d-none d-lg-block" id="collapsingNavbar3">
            <ul class="navbar-nav justify-content-between nav-menu-header">
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'osago-form' || \Yii::$app->controller->action->id == 'osago-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/osago-form'])?>">ОСАГО</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'travel-form' || \Yii::$app->controller->action->id == 'travel-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/travel-form'])?>">ПУТЕШЕСТВИЯ</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'live-form' || \Yii::$app->controller->action->id == 'live-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/live-form'])?>">ЗДОРОВЬЕ И ЖИЗНЬ</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'realty-form' || \Yii::$app->controller->action->id == 'realty-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/realty-form'])?>">НЕДВИЖИМОСТЬ</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'kasko-form' || \Yii::$app->controller->action->id == 'kasko-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/kasko-form'])?>">КАСКО</a>
                </li>
            </ul>
        </div>
        <button class="navbar-toggler button-header" type="button" data-toggle="collapse" data-target="#navbarNav">
            <img src="images/top-submenu-icon.png">
            <!--<span class="navbar-toggler-icon"></span>-->
        </button>

        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-between">
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'osago-form' || \Yii::$app->controller->action->id == 'osago-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/osago-form'])?>">ОСАГО</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'travel-form' || \Yii::$app->controller->action->id == 'travel-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/travel-form'])?>">ПУТЕШЕСТВИЯ</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'live-form' || \Yii::$app->controller->action->id == 'live-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/live-form'])?>">ЗДОРОВЬЕ И ЖИЗНЬ</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'realty-form' || \Yii::$app->controller->action->id == 'realty-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/realty-form'])?>">НЕДВИЖИМОСТЬ</a>
                </li>
                <li class="nav-item <?= (\Yii::$app->controller->action->id == 'kasko-form' || \Yii::$app->controller->action->id == 'kasko-list')?'active':'';?>">
                    <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/kasko-form'])?>">КАСКО</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .nav-menu-header{
        flex-direction: row;
        width: 650px;
        margin: auto;
    }
    #collapsingNavbar3{
        flex-basis: 70%;
    }
    .navbar .button-header{
        margin-left: 10px;
    }
</style>