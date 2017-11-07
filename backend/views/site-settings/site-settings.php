<div id="site-settings">
    <h2>Настройки сайта</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
    <form method="post" action="<?= \yii\helpers\Url::to(['site-settings/save-settings'])?>">
        <div class="on-off-site">
            <h4>Включить / выключить сайт</h4>
            <select name="is_available">
                <option <?= $settings['is_available']==1?'selected':''?> value="1">Вкл</option>
                <option <?= $settings['is_available']==0?'selected':''?> value="0">Выкл</option>
            </select>
        </div>


        <div>

        </div>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Сохранить"/>
    </form>
</div>