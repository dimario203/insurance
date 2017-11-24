<?php

use yii\db\Migration;

/**
 * Class m171123_100302_add_rows_to_travel_accident
 */
class m171123_100302_add_rows_to_travel_accident extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 1, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);

        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 2, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 3, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);

        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->insert('{{%travel_accident}}', ['company_id' => 4, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 1, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 2, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 3, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>1,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>1,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>2,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>2,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>3,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>3,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>4,'duration' => 0, 'sum_insured'=>1, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>4,'duration' => 1, 'sum_insured'=>1, 'price' => 200]);

        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>1,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>1,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>2,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>2,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>3,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>3,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>4,'duration' => 0, 'sum_insured'=>2, 'price' => 100]);
        $this->delete('travel_accident', ['company_id' => 4, 'country_id'=>4,'duration' => 1, 'sum_insured'=>2, 'price' => 200]);
    }
}
