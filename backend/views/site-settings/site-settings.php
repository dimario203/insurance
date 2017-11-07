<div id="site-settings">
    <h2>Настройки сайта</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
    <form method="post" action="<?= \yii\helpers\Url::to(['site-settings/save-settings'])?>">
        <fieldset class="on-off-site">
            <legend>Включить / выключить сайт</legend>
            <select name="is_available">
                <option <?= $settings['is_available'] == 1 ? 'selected' : '' ?> value="1">Вкл</option>
                <option <?= $settings['is_available'] == 0 ? 'selected' : '' ?> value="0">Выкл</option>
            </select>
        </fieldset>


        <fieldset class="on-off-polis">
            <legend>Включить / выключить отображение продуктов на сайте</legend>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[osago]" value="1" checked/>
                         ОСАГО
            </span>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[travel]" value="2" checked/>
                        Путишествия
            </span>
            <span class="site-settings-items">
                       <input class="settings-input" type="checkbox" name="polis[live]" value="3" checked/>
                       Жизнь и Здоровье
            </span>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[realty]" value="4" checked/>
                        Недвижимость
            </span>
            <span class="site-settings-items">
                        <input class="settings-input" type="checkbox" name="polis[kasko]" value="5"/>
                        КАСКО
            </span>
            <span class="site-settings-items">
                        <input class="settings-input-all" type="checkbox" name="polis[all]" value="6"/>
                        Отключить все
            </span>
        </fieldset>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Сохранить"/>
    </form>
</div>

<?php
$script = <<< JS
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