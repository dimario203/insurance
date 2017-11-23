<?php

use yii\db\Migration;

/**
 * Class m171123_100823_add_rows_to_coutry
 */
class m171121_100823_add_rows_to_coutry extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%country}}', ['name' => 'США']);
        $this->insert('{{%country}}', ['name' => 'Шенген']);
        $this->insert('{{%country}}', ['name' => 'Азия']);
        $this->insert('{{%country}}', ['name' => 'Австралия']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('country', ['name' => 'США']);
        $this->delete('country', ['name' => 'Шенген']);
        $this->delete('country', ['name' => 'Азия']);
        $this->delete('country', ['name' => 'Австралия']);
    }
}
