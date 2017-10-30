<?php

use yii\db\Migration;

class m171025_105854_create_company_table extends Migration
{
    public function Up()
    {
        $this->createTable('company', [
            'company_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url' => $this->string(),
            'phone' => $this->string(25),
            'commission' => $this->integer(11),
            'logo' => $this->string(),
            'visible' => $this->SmallInteger(1)->defaultValue(1),
        ]);
    }

    public function Down()
    {
        $this->dropTable('company');
    }
}
