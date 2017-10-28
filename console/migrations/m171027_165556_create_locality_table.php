<?php

use yii\db\Migration;

class m171027_165556_create_locality_table extends Migration
{
    public function Up()
    {
        $this->createTable('locality', [
            'locality_id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
        ]);
    }

    public function Down()
    {
        $this->dropTable('locality');
    }
}
