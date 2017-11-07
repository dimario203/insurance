<?php
use yii\helpers\Url;
?>

<div id="company">
    <h2>Введите данные о новой компании</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
    <form method="post" action="<?= Url::to(['epl/add-company'])?>" enctype="multipart/form-data">
        <table class="table-company">
            <col width="25%">
            <col width="35%">
            <col width="10%">
            <col width="5%">
            <col width="20%">
            <col width="5%">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>URL</th>
                    <th>Телефон</th>
                    <th>Комиссия</th>
                    <th>Логотип - имя файла</th>
                    <th>Отображать</th>
                </tr>
            </thead>

            <tr>
                <td>
                    <input type="text" name="name" size="30" required/>
                </td>
                <td>
                    <input type="text" name="url" size="40"/>
                </td>
                <td>
                    <input type="text" name="phone" size="25"/>
                </td>
                <td>
                    <input type="text" name="commission" size="11"/>
                </td>
                <td>
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                    <input type="file" name="logo"/>
                </td>
                <td class="company-visible">
                    <input type="checkbox" name="visible"/>
                </td>
            </tr>
        </table>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input class="button-save" type="submit" value="Сохранить"/>
    </form>
</div>