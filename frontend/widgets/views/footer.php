<footer class="bg-dark text-white mt-4">
    <div class="container py-3">
        <div class="row">
            <div class="col-6 col-md-12">
                <div class="row">
                    <div class="col col-md-3">
                        <img src="images/logo.png" style="max-width: 100%;">
                    </div>
                    <div class="col col-md-7">
                        <ul class="nav footer-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['site/osago-form']) ?>">ОСАГО</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['site/travel-form']) ?>">ПУТЕШЕСТВИЯ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['site/live-form']) ?>">ЗДОРОВЬЕ И ЖИЗНЬ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['site/realty-form']) ?>">НЕДВИЖИМОСТЬ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['site/kasko-form']) ?>">КАСКО</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 d-none d-sm-none d-md-block">МЫ В СОЦСЕТЯХ</div>
                </div>
            </div>
            <div class="col-6 col-md-12">
                <div class="row pt-md-3">
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
                <?=$social_networks['facebook']?'<a  href="'.$social_networks['facebook'].'" target="_blank">  <i class="fa fa-facebook-official" aria-hidden="true"></i></a>':''?>
                <?=$social_networks['vk']?'<a href="'.$social_networks['vk'].'"  target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>':''?>
                <?=$social_networks['google']?'<a  href="'.$social_networks['google'].'"  target="_blank"><i class="fa fa-envelope-open" aria-hidden="true"></i></a>':''?>
            </div>
        </div>
    </div>
</footer>