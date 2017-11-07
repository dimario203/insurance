<div id="site-settings">
    <h2 class="settings-title">Настройки сайта</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
    <form method="post" action="<?= \yii\helpers\Url::to(['site-settings/save-settings'])?>">
        <div class="on-off-site">
            <h4 class="site-settings--form-item">Включить / выключить сайт</h4>
            <select name="is_available">
                <option <?= $settings['is_available'] == 1 ? 'selected' : '' ?> value="1">Вкл</option>
                <option <?= $settings['is_available'] == 0 ? 'selected' : '' ?> value="0">Выкл</option>
            </select>
        </div>


        <div class="on-off-polis">
            <h4 class="site-settings--form-item">Включить / выключить отображение продуктов на сайте</h4>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[osago]" value="1" <?= $settings['find_osago'] == 1 ? 'checked' : '' ?>/>
                         ОСАГО
            </span>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[travel]" value="2" <?= $settings['find_travel'] == 1 ? 'checked' : '' ?>/>
                        Путишествия
            </span>
            <span class="site-settings-items">
                       <input class="settings-input" type="checkbox" name="polis[live]" value="3" <?= $settings['find_live'] == 1 ? 'checked' : '' ?>/>
                       Жизнь и Здоровье
            </span>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[realty]" value="4" <?= $settings['find_realty'] == 1 ? 'checked' : '' ?>/>
                        Недвижимость
            </span>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[kasko]" value="5" <?= $settings['find_kasko'] == 1 ? 'checked' : '' ?>/>
                        КАСКО
            </span>
            <span class="site-settings-items">
                        <input class="settings-input-all" type="checkbox" name="polis[all]" value="6" <?= $settings['find_all'] == 0 ? 'checked' : '' ?>/>
                        Отключить все
            </span>
        </div>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input class="button-ok" type="submit" value="Сохранить"/>
    </form>
</div>

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