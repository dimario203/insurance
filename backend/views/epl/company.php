<?php
use yii\helpers\Url;
?>

<div id="company">
    <h2>Компания "<?= $company['name'] ?>"</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
    <form method="post" action="<?= Url::to(['epl/update-company'])?>" enctype="multipart/form-data">
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
                    <input type="text" name="name" value="<?= $company['name'] ?>" size="30" required/>
                </td>
                <td>
                    <input type="text" name="url" value="<?= $company['url'] ?>" size="40"/>
                </td>
                <td>
                    <input type="text" name="phone" value="<?= $company['phone'] ?>" size="25"/>
                </td>
                <td>
                    <input type="text" name="commission" value="<?= $company['commission'] ?>" size="11"/>
                </td>
                <td>
                    <span class="company-logo"><?= basename($company['logo']);?></span><br/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                    <input type="file" accept="image/*" name="logo"/>
                </td>
                <td class="company-visible">
                    <input type="checkbox" name="visible" <?=$company['visible']?'checked':''?>/>
                </td>
            </tr>
        </table>
        <input type="hidden" name="company_id" value="<?= $company['company_id'] ?>">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input class="button-save" type="submit" value="Сохранить"/>
    </form>
</div>