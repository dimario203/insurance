<?php

use yii\db\Migration;

class m171025_105854_create_company_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('company', [
            'comp_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url' => $this->string(),
            'phone' => $this->string(25),
            'commission' => $this->integer(11),
            'logo' => $this->string(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('company');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171025_105854_create_company_table cannot be reverted.\n";

        return false;
    }
    */
}
