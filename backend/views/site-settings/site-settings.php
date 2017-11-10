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
            <form method="post" action="<?= \yii\helpers\Url::to(['site-settings/save-settings']) ?>">
                <div class="on-off-site">
                    <h4 class="site-settings--form-item">Включить / выключить сайт</h4>
                    <select name="is_available" class="form-control input-sm">
                        <option <?= $settings['is_available'] == 1 ? 'selected' : '' ?> value="1">Вкл</option>
                        <option <?= $settings['is_available'] == 0 ? 'selected' : '' ?> value="0">Выкл</option>
                    </select>
                </div>
                <div class="on-off-polis">
                    <h4 class="site-settings--form-item">Включить / выключить отображение продуктов на сайте</h4>
                <div class="checkbox">
                    <input class="settings-input form-control" type="checkbox" name="polis[osago]"
                           value="1" <?= $settings['find_osago'] == 1 ? 'checked' : '' ?>/>
                    <label>ОСАГО</label>
                </div>
                <div class="checkbox">
                     <input class="settings-input form-control" type="checkbox" name="polis[travel]"
                            value="2" <?= $settings['find_travel'] == 1 ? 'checked' : '' ?>/>
                     <label>Путешествия</label>
                </div>
                 <div class="checkbox">
                      <input class="settings-input form-control" type="checkbox" name="polis[live]"
                             value="3" <?= $settings['find_live'] == 1 ? 'checked' : '' ?>/>
                      <label>Жизнь и Здоровье</label>
                 </div>
               <div class="checkbox">
                    <input class="settings-input form-control" type="checkbox" name="polis[realty]"
                           value="4" <?= $settings['find_realty'] == 1 ? 'checked' : '' ?>/>
                    <label>Недвижимость</label>
               </div>
                <div class="checkbox">
                        <input class="settings-input form-control" type="checkbox" name="polis[kasko]"
                               value="5" <?= $settings['find_kasko'] == 1 ? 'checked' : '' ?>/>
                        <label>КАСКО</label>
                </div>
                 <div class="checkbox">
                      <input class="settings-input-all form-control" type="checkbox" name="polis[all]"
                             value="6" <?= $settings['find_all'] == 0 ? 'checked' : '' ?>/>
                      <label>Отключить все</label>
                 </div>
                </div>
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                <input class="button-ok btn btn-sm btn-primary" type="submit" value="Сохранить"/>
            </form>
        </div>
    </div>
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