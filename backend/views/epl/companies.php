<?php
use yii\helpers\Url;
?>

<div id="companies">
    <h2>Перечень компаний:</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
        <table class="table-companies">
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
                foreach($companies as $company){?>
                   <tr>
                       <td><?= $company['name']?></td>
                       <td><?= $company['url']?></td>
                       <td><?= $company['phone']?></td>
                       <td><?= $company['commission']?></td>
                       <td><?= $company['logo']?></td>
                       <td class="company-visible">
                           <input type="checkbox" disabled <?=$company['visible']?'checked':''?>/>
                       </td>
                       <td>
                           <a href="<?= Url::to(['epl/edite-company', 'id'=>$company['company_id']])?>">
                                <input type="button" value="Редактировать"/>
                           </a>
                       </td>
                   </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
    <div class="button-add">
        <a href="<?= Url::to(['epl/add-company'])?>">
            <input type="button" value="Создать компанию"/>
        </a>
    </div>
</div>


