<?php

use yii\db\Migration;

/**
 * Class m171121_144555_create_add_rows_to_osago_table
 */
class m171121_144555_create_add_rows_to_osago_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('osago', 'summa', $this->integer());

        $this->insert('{{%osago}}', ['company_id' => 1, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 100]);
        $this->insert('{{%osago}}', ['company_id' => 2, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 200]);
        $this->insert('{{%osago}}', ['company_id' => 3, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 500]);
        $this->insert('{{%osago}}', ['company_id' => 4, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 600]);
        $this->insert('{{%osago}}', ['company_id' => 5, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 800]);
        $this->insert('{{%osago}}', ['company_id' => 1, 'region_id' => 2, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 400]);
        $this->insert('{{%osago}}', ['company_id' => 1, 'region_id' => 3, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 500]);
        $this->insert('{{%osago}}', ['company_id' => 1, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 100]);
        $this->insert('{{%osago}}', ['company_id' => 2, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 200]);
        $this->insert('{{%osago}}', ['company_id' => 3, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 500]);
        $this->insert('{{%osago}}', ['company_id' => 4, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 600]);
        $this->insert('{{%osago}}', ['company_id' => 5, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 800]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('osago', ['company_id' => 1, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 100]);
        $this->delete('osago', ['company_id' => 2, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 200]);
        $this->delete('osago', ['company_id' => 3, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 500]);
        $this->delete('osago', ['company_id' => 4, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 600]);
        $this->delete('osago', ['company_id' => 5, 'region_id' => 1, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 800]);
        $this->delete('osago', ['company_id' => 1, 'region_id' => 2, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 400]);
        $this->delete('osago', ['company_id' => 1, 'region_id' => 3, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 500]);
        $this->delete('osago', ['company_id' => 1, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 100]);
        $this->delete('osago', ['company_id' => 2, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 200]);
        $this->delete('osago', ['company_id' => 3, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 500]);
        $this->delete('osago', ['company_id' => 4, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 600]);
        $this->delete('osago', ['company_id' => 5, 'region_id' => 4, 'power' => 1, 'age' => 1, 'experience' => 1, 'summa'=>4000, 'price' => 800]);

        $this->dropColumn('osago', 'summa');
    }
}
