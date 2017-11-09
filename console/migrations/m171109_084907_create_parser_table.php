<?php

use yii\db\Migration;

/**
 * Class m171109_084907_create_parser_table
 */
class m171109_084907_create_parser_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function Up()
    {
        $this->createTable('parser', [
            'parser_id' => $this->primaryKey(),
            'action' => $this->string()->notNull(),
            'site_name' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        $this->dropTable('parser');
    }
}
