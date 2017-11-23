<?php

use yii\db\Migration;

/**
 * Class m171123_091000_add_rows_to_type_aditional_payds
 */
class m171123_091000_add_rows_to_type_aditional_payds extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%type_additional_paid}}', ['name' => 'Отмена поездки', 'description' => 'Отмена поездки']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Задержка авиарейса', 'description' => 'Задержка авиарейса']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Юридическая помощь', 'description' => 'Юридическая помощь']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Потеря или похищение документов', 'description' => 'Потеря или похищение документов']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Утрата или повреждение багажа', 'description' => 'Утрата или повреждение багажа']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Активный отдых', 'description' => 'Активный отдых']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Интоксикация', 'description' => 'Интоксикация']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Оплата срочных СМС сообщений', 'description' => 'Оплата срочных СМС сообщений']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Посмертная репартриация', 'description' => 'Посмертная репартриация']);
        $this->insert('{{%type_additional_paid}}', ['name' => 'Срочная стоматология', 'description' => 'Срочная стоматология']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->delete('type_additional_paid', ['name' => 'Отмена поездки', 'description' => 'Отмена поездки']);
       $this->delete('type_additional_paid', ['name' => 'Задержка авиарейса', 'description' => 'Задержка авиарейса']);
       $this->delete('type_additional_paid', ['name' => 'Юридическая помощь', 'description' => 'Юридическая помощь']);
       $this->delete('type_additional_paid', ['name' => 'Потеря или похищение документов', 'description' => 'Потеря или похищение документов']);
       $this->delete('type_additional_paid', ['name' => 'Утрата или повреждение багажа', 'description' => 'Утрата или повреждение багажа']);
       $this->delete('type_additional_paid', ['name' => 'Активный отдых', 'description' => 'Активный отдых']);
       $this->delete('type_additional_paid', ['name' => 'Интоксикация', 'description' => 'Интоксикация']);
       $this->delete('type_additional_paid', ['name' => 'Оплата срочных СМС сообщений', 'description' => 'Оплата срочных СМС сообщений']);
       $this->delete('type_additional_paid', ['name' => 'Посмертная репартриация', 'description' => 'Посмертная репартриация']);
       $this->delete('type_additional_paid', ['name' => 'Срочная стоматология', 'description' => 'Срочная стоматология']);
    }


}
