<?php

use yii\db\Migration;

/**
 * Class m171123_101818_add_rows_to_regions
 */
class m171121_101818_add_rows_to_regions extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%region}}', ['name' => 'Москва', 'locality_id'=>1]);
        $this->insert('{{%region}}', ['name' => 'Санкт Питербург', 'locality_id'=>2]);
        $this->insert('{{%region}}', ['name' => 'Рязань', 'locality_id'=>3]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('region', ['name' => 'Москва', 'locality_id'=>1]);
        $this->delete('region', ['name' => 'Санкт Питербург', 'locality_id'=>2]);
        $this->delete('region', ['name' => 'Рязань', 'locality_id'=>3]);
    }
}
