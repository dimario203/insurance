<?php

use yii\helpers\Url;
use yeesoft\widgets\ActiveForm;
use yeesoft\media\widgets\TinyMce;
use yeesoft\media\widgets\FileInput;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;

?>
<ul class="breadcrumb">
    <li><a href="/admin">Главное Меню</a></li>
    <li><a href="/admin/epl/get-companies">Компании</a></li>
    <li class="active">Создать новую компанию</li>
</ul>
<h3>Введите данные о новой компании</h3>
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
            <form method="post" action="<?= Url::to(['epl/add-company']) ?>">
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
                                <input class="form-control" type="text" name="name" size="30" required/>
                            </td>
                            <td class="company-td-url">
                                <input class="form-control" type="text" name="url" size="40"/>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="phone" size="25"/>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="commission" size="11"/>
                            </td>
                            <td>
                                <?=FileInput::widget(['name'=>'logo']);?>
                            </td>
                            <td class="company-visible">
                                <div class="checkbox">
                                    <input class="form-control" type="checkbox" name="visible"/>
                                    <label> </label>
                                </div>
                            </td>
                        </tr>
                    </thead>
                </table>
                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                <input class="button-save btn btn-sm btn-primary" type="submit" value="Сохранить"/>
            </form>
        </div>
    </div>
</div>