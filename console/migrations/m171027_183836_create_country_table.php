<?php

use yii\db\Migration;

class m171027_183836_create_country_table extends Migration
{
    public function Up()
    {
        $this->createTable('country', [
            'country_id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull()
        ]);
    }

    public function Down()
    {
        $this->dropTable('country');
    }
}
