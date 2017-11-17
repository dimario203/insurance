<footer class="bg-dark text-white mt-4">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3">
                <img src="images/logo.png">
            </div>
            <div class="col-md-7">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/osago-form'])?>">ОСАГО</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/travel-form'])?>">ПУТЕШЕСТВИЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/live-form'])?>">ЗДОРОВЬЕ И ЖИЗНЬ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/realty-form'])?>">НЕДВИЖИМОСТЬ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['site/kasko-form'])?>">КАСКО</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">МЫ В СОЦСЕТЯХ</div>
        </div>
        <div class="row pt-3">
            <div class="col-md-10">
                <span class="small">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Полезные статьи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Помощь</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Партнерская программа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Правила использования сервиса</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Политика конфиденциальности</a>
                        </li>
                    </ul>
                </span>
            </div>
            <div class="col-md-2 justify-content-end font-weight-bold">
                <a <?=$social_networks['facebook']?'href="'.$social_networks['facebook'].'"':''?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a <?=$social_networks['vk']?'href="'.$social_networks['vk'].'"':''?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a <?=$social_networks['google']?'href="'.$social_networks['google'].'"':''?>" target="_blank"><i class="fa fa-envelope-open" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</footer>

<style>
    .fa-facebook-official, .fa-vk, .fa-envelope-open{
        color: white;
        font-size:26px;
        padding-left: 8px;
    }
</style>