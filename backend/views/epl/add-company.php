<?php
use yii\helpers\Url;
?>

<div>
    <h2>Введите данные о новой компании</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
    <form method="post" action="<?= Url::to(['epl/add-company'])?>" enctype="multipart/form-data">
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
            </tr>
        </table>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" value="Сохранить"/>
    </form>
</div>