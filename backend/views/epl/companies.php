<?php
use yii\helpers\Url;
?>

<div>
    <h2>Перечень компаний:</h2>
    <?php
    if(isset($mess)){?>
        <h4 class="message-<?= $status?>"><?= $mess?></h4>
        <?php
    }
    ?>
        <table>
            <tr>
                <th>Название</th>
                <th>URL</th>
                <th>Телефон</th>
                <th>Комиссия</th>
                <th>Логотип(140х56)</th>
                <th></th>
            </tr>

            <?php
                foreach($companies as $company){?>
                   <tr>
                       <td><?= $company['name']?></td>
                       <td><?= $company['url']?></td>
                       <td><?= $company['phone']?></td>
                       <td><?= $company['commission']?></td>
                       <td><?= $company['logo']?></td>
                       <td>
                           <a href="<?= Url::to(['epl/edite-company', 'id'=>$company['comp_id']])?>">
                                <input type="button" value="Редактировать"/>
                           </a>
                       </td>
                   </tr>
                <?php
                }
            ?>
        </table>
    <div>
        <a href="<?= Url::to(['epl/add-company'])?>">
            <input type="button" value="Создать компанию"/>
        </a>
    </div>
</div>
