<?php

use yii\db\Migration;

class m171027_213603_create_Type_additional_paid_table extends Migration
{
    public function Up()
    {
        $this->createTable('type_additional_paid', [
            'paid_id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->string()
        ]);
    }

    public function Down()
    {
        $this->dropTable('type_additional_paid');
    }


}
