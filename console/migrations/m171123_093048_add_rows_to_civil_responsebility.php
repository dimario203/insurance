<?php

use yii\db\Migration;

/**
 * Class m171123_093048_add_rows_to_civil_responsebility
 */
class m171123_093048_add_rows_to_civil_responsebility extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%civil_responsibility}}', ['company_id' => 1, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 1, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 1, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 1, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 1, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 1, 'country_id'=>3,'duration' => 1, 'price' => 100]);

        $this->insert('{{%civil_responsibility}}', ['company_id' => 2, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 2, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 2, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 2, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 2, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 2, 'country_id'=>3,'duration' => 1, 'price' => 100]);

        $this->insert('{{%civil_responsibility}}', ['company_id' => 3, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 3, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 3, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 3, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 3, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 3, 'country_id'=>3,'duration' => 1, 'price' => 100]);

        $this->insert('{{%civil_responsibility}}', ['company_id' => 4, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 4, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 4, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 4, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 4, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->insert('{{%civil_responsibility}}', ['company_id' => 4, 'country_id'=>3,'duration' => 1, 'price' => 100]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('civil_responsibility', ['company_id' => 1, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 1, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 1, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 1, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 1, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 1, 'country_id'=>3,'duration' => 1, 'price' => 100]);

        $this->delete('civil_responsibility', ['company_id' => 2, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 2, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 2, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 2, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 2, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 2, 'country_id'=>3,'duration' => 1, 'price' => 100]);

        $this->delete('civil_responsibility', ['company_id' => 3, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 3, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 3, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 3, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 3, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 3, 'country_id'=>3,'duration' => 1, 'price' => 100]);

        $this->delete('civil_responsibility', ['company_id' => 4, 'country_id'=>1,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 4, 'country_id'=>2,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 4, 'country_id'=>3,'duration' => 0, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 4, 'country_id'=>1,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 4, 'country_id'=>2,'duration' => 1, 'price' => 100]);
        $this->delete('civil_responsibility', ['company_id' => 4, 'country_id'=>3,'duration' => 1, 'price' => 100]);
    }
}
