<?php

use yii\db\Migration;

/**
 * Class m171123_101509_add_rows_to_locality
 */
class m171121_101509_add_rows_to_locality extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%locality}}', ['name' => 'Московская область']);
        $this->insert('{{%locality}}', ['name' => 'Санкт Питербург']);
        $this->insert('{{%locality}}', ['name' => 'Рязанская область']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('locality', ['name' => 'Московская область']);
        $this->delete('locality', ['name' => 'Санкт Питербург']);
        $this->delete('locality', ['name' => 'Рязанская область']);
    }


}
