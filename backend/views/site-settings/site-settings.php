<ul class="breadcrumb">
    <li><a href="/admin">Главное Меню</a></li>
    <li class="active">Настройки сайта</li>
</ul>
<h3 class="settings-title">Настройки сайта</h3>
<div class="panel panel-default">
    <div class="panel-body">
        <div id="post-grid-pjax" class="site-settings">
            <?php
            if (isset($mess)) {
                ?>
                <h4 class="message-<?= $status ?>"><?= $mess ?></h4>
                <?php
            }
            ?>
            <form method="post" action="<?= \yii\helpers\Url::to(['site-settings/save-settings']) ?>" class="form-horizontal">
                <fieldset class="on-off-site">
                    <legend class="site-settings--form-item">Включить / выключить сайт</legend>
                    <select name="is_available" class="form-control input-sm">
                        <option <?= $settings['is_available'] == 1 ? 'selected' : '' ?> value="1">Вкл</option>
                        <option <?= $settings['is_available'] == 0 ? 'selected' : '' ?> value="0">Выкл</option>
                    </select>
                </fieldset>
                <br class='clear' />
                <fieldset class="on-off-polis">
                    <legend class="site-settings--form-item">Включить / выключить отображение продуктов на сайте</legend>
                    <div class="checkbox polis">
                        <input class="settings-input form-control" type="checkbox" name="polis[osago]"
                               value="1" <?= $settings['find_osago'] == 1 ? 'checked' : '' ?>/>
                        <label>ОСАГО</label>
                    </div>
                    <div class="checkbox polis">
                        <input class="settings-input form-control" type="checkbox" name="polis[travel]"
                               value="2" <?= $settings['find_travel'] == 1 ? 'checked' : '' ?>/>
                        <label>Путешествия</label>
                    </div>
                    <div class="checkbox polis">
                        <input class="settings-input form-control" type="checkbox" name="polis[live]"
                               value="3" <?= $settings['find_live'] == 1 ? 'checked' : '' ?>/>
                        <label>Жизнь и Здоровье</label>
                    </div>
                    <div class="checkbox polis">
                        <input class="settings-input form-control" type="checkbox" name="polis[realty]"
                               value="4" <?= $settings['find_realty'] == 1 ? 'checked' : '' ?>/>
                        <label>Недвижимость</label>
                    </div>
                    <div class="checkbox polis">
                        <input class="settings-input form-control" type="checkbox" name="polis[kasko]"
                               value="5" <?= $settings['find_kasko'] == 1 ? 'checked' : '' ?>/>
                        <label>КАСКО</label>
                    </div>
                    <div class="checkbox polis">
                        <input class="settings-input-all form-control" type="checkbox" name="polis[all]"
                               value="6" <?= $settings['find_all'] == 0 ? 'checked' : '' ?>/>
                        <label>Отключить все</label>
                    </div>
                </fieldset>
                <br class='clear' />
                <fieldset class="social-networks">
                    <legend class="site-settings--form-item">Адреса социальных сетей</legend>
                    <div class="cellBlock  form-group">
                        <i class="fa fa-facebook-official cellLeft col-sm-2 control-label" aria-hidden="true"></i>
                        <div class="col-sm-10">
                            <input type="text" class="form-control cellRight" name="network[facebook]" value="<?=$social_networks['facebook']?>" placeholder="Введите URL адрес">
                        </div>
                    </div>
                    <div class="cellBlock form-group">
                        <i class="fa fa-vk cellLeft col-sm-2 control-label" aria-hidden="true"></i>
                        <div class="col-sm-10">
                            <input type="text" class="form-control cellRight" name="network[vk]" value="<?=$social_networks['vk']?>" placeholder="Введите URL адрес">
                        </div>
                    </div>
                    <div class="cellBlock form-group">
                        <i class="fa fa-envelope-open cellLeft col-sm-2 control-label" aria-hidden="true"></i>
                        <div class="col-sm-10">
                            <input type="text" class="form-control cellRight" name="network[google]" value="<?=$social_networks['google']?>" placeholder="Введите URL адрес">
                        </div>
                    </div>
                </fieldset>
                <br class='clear' />
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                <input class="button-ok btn btn-sm btn-primary" type="submit" value="Сохранить"/>
            </form>
        </div>
    </div>
</div>

<style>
    .fa-facebook-official, .fa-vk, .fa-envelope-open{
        color: black;
        font-size:26px;
        padding-left: 8px;
    }
    .site-settings .on-off-site, .site-settings .on-off-polis,
    .site-settings .on-off-polis .checkbox.polis{
        float: left;
        clear: both;
    }
    .cellBlock {
        width: 70%;
        //display: table;
    }
    /*.cellLeft, .cellRight {
        display: table-cell !important;
        display: inline;
    }*/
    .cellLeft {
        width:5%;
    }
    .clear {
        clear: both;
        display: block;
        height: 0;
        line-height: 0;
        overflow: hidden;
        font-size: 0;
    }
    @media (max-width: 930px) {
        .cellBlock {
            width: 100%;
        }
    }
</style>

<?php
$script = <<< JS
    if($('.settings-input-all').prop('checked')){
          $('.settings-input').prop('disabled', true);
          $('.settings-input').prop('checked', false);
        }
    $('.settings-input-all').click(function(){
        var el = this;
        if($(this).prop('checked')){
          $('.settings-input').prop('disabled', true);
          $('.settings-input').prop('checked', false);
        } else {
             $('.settings-input').prop('disabled', false);
              $('.settings-input').prop('checked', true);
        }
    });
   
JS;
$this->registerJs($script);
?>