<?php
use yii\helpers\Url;
?>
<ul class="breadcrumb">
    <li><a href="/admin">Главное Меню</a></li>
    <li class="active">Компании</li>
</ul>
<h3>Перечень компаний:</h3>
<div class="panel panel-default">
    <div class="panel-body">
        <div id="post-grid" class="grid-view">
            <?php
            if (isset($mess)) {
                ?>
                <h4 class="message-<?= $status ?>"><?= $mess ?></h4>
                <?php
            }
            ?>
            <!--<table class="table-companies ">-->
            <table class="table table-striped table-company">
                <col width="25%">
                <col width="35%">
                <col width="10%">
                <col width="5%">
                <col width="15%">
                <col width="5%">
                <col width="5%">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>URL</th>
                    <th>Телефон</th>
                    <th>Комиссия</th>
                    <th>Логотип(140х56)</th>
                    <th>Отображать</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($companies as $company) {
                    ?>
                    <tr>
                        <td ><?= $company['name'] ?></td>
                        <td class="company-td-url"><?= $company['url'] ?></td>
                        <td><?= $company['phone'] ?></td>
                        <td><?= $company['commission'] ?></td>
                        <td><?= $company['logo'] ?></td>
                        <td class="company-visible  company-td">
                            <span style="font-size:85%;"
                                  class="label label-primary <?= $company['visible'] ? 'visible-label' : 'invisible-label' ?>"><?= $company['visible'] ? 'Отображается' : 'Не отображается' ?></span

                        </td>
                        <td class="company-edit  company-td">
                            <a class="btn btn-sm btn-primary"
                               href="<?= Url::to(['epl/edite-company', 'id' => $company['company_id']]) ?>">Редактировать</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <div class="button-add btn btn-sm btn-primary">
                <a href="<?= Url::to(['epl/add-company']) ?>">Создать компанию</a>
            </div>
        </div>
    </div>
</div>


