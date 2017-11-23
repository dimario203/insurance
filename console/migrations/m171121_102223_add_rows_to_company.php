<?php

use yii\db\Migration;

/**
 * Class m171123_102223_add_rows_to_company
 */
class m171121_102223_add_rows_to_company extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%company}}', ['name' => 'Альфастрах', 'url'=>'www.alfa.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->insert('{{%company}}', ['name' => 'ББС-страх', 'url'=>'www.alla.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->insert('{{%company}}', ['name' => 'СБС', 'url'=>'www.ay.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->insert('{{%company}}', ['name' => 'Соцстрах', 'url'=>'www.bbb.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->insert('{{%company}}', ['name' => 'Бетастрах', 'url'=>'www.vcf.com', 'phone'=>'555-555-555', 'commission'=>10]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('company', ['name' => 'Альфастрах', 'url'=>'www.alfa.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->delete('company', ['name' => 'ББС-страх', 'url'=>'www.alla.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->delete('company', ['name' => 'СБС', 'url'=>'www.ay.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->delete('company', ['name' => 'Соцстрах', 'url'=>'www.bbb.com', 'phone'=>'555-555-555', 'commission'=>10]);
        $this->delete('company', ['name' => 'Бетастрах', 'url'=>'www.vcf.com', 'phone'=>'555-555-555', 'commission'=>10]);
    }
}
