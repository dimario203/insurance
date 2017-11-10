<?php
use yii\helpers\Url;
?>
<ul class="breadcrumb">
    <li><a href="/admin">Главное Меню</a></li>
    <li><a href="/admin/epl/get-companies">Компании</a></li>
    <li class="active">Редактирование Компании</li>
</ul>
<h3>Компания "<?= $company['name'] ?>"</h3>
<div class="panel panel-default">
    <div class="panel-body">
        <div id="post-grid" class="grid-view company">
            <?php
            if (isset($mess)) {
                ?>
                <h4 class="message-<?= $status ?>"><?= $mess ?></h4>
                <?php
            }
            ?>
            <form method="post" action="<?= Url::to(['epl/update-company']) ?>" enctype="multipart/form-data">
                <table class="table-company table table-striped">
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

                    <thead>
                        <tr id="post-grid-filters" class="filters">
                            <td>
                                <input class="form-control" type="text" name="name" value="<?= $company['name'] ?>"
                                       size="30" required/>
                            </td>
                            <td class="company-td-url">
                                <input class="form-control" type="text" name="url" value="<?= $company['url'] ?>"
                                       size="40"/>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="phone" value="<?= $company['phone'] ?>"
                                       size="25"/>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="commission"
                                       value="<?= $company['commission'] ?>" size="11"/>
                            </td>
                            <td>
                                <!--<span class="company-logo"><?= basename($company['logo']); ?></span><br/>-->
                                <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
                                <input class="form-control" type="file" accept="image/*" name="logo"/>
                            </td>
                            <td class="company-visible">
                                <div class="checkbox">
                                    <input class="form-control" type="checkbox" name="visible" <?= $company['visible'] ? 'checked' : '' ?>/>
                                    <label> </label>
                                </div>
                            </td>
                        </tr>
                    </thead>
                </table>
                <input type="hidden" name="company_id" value="<?= $company['company_id'] ?>">
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                <input class="button-save btn btn-sm btn-primary" type="submit" value="Сохранить"/>
            </form>
        </div>
    </div>
</div>