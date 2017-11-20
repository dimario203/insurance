<nav class="navbar navbar-dark navbar-expand-md bg-red py-3">
    <div class="container">
        <a href="/" class="navbar-brand"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar3">
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
            <ul class="nav navbar-nav ml-auto w-25 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="images/top-submenu-icon.png"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>