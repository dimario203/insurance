<?php
use yii\helpers\Url;
?>

<div>
    <h2>Компания "<?= $company['name'] ?>"</h2>
    <?php
        if(isset($mess)){?>
            <h4><?= $mess?></h4>
        <?php
        }
    ?>
    <form method="post" action="<?= Url::to(['epl/update-company'])?>" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Название</th>
                <th>URL</th>
                <th>Телефон</th>
                <th>Комиссия</th>
                <th>Логотип - имя файла</th>
            </tr>

            <tr>
                <td>
                    <input type="text" name="name" value="<?= $company['name'] ?>" size="30"/>
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
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                    <input type="file" name="logo"/>
                </td>
            </tr>
        </table>
        <input type="hidden" name="comp_id" value="<?= $company['comp_id'] ?>">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Сохранить"/>
    </form>
</div>