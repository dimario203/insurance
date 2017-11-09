<?php

use yii\db\Migration;

/**
 * Class m171109_085328_create_parser_count_table
 */
class m171109_085328_create_parser_count_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function Up()
    {
        $this->createTable('parser_count', [
            'count_id' => $this->primaryKey(),
            'count' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        $this->dropTable('parser_count');
    }
}
