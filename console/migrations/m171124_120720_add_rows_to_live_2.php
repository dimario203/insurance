<?php

use yii\db\Migration;

/**
 * Class m171124_120720_add_rows_to_live_2
 */
class m171124_120720_add_rows_to_live_2 extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery' => 2, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery' => 2, 'price' => 200]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery' => 2, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery' => 2, 'price' => 400]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery' => 2, 'price' => 500]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery' => 2, 'price' => 250]);
    }
        
        
        
        

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery'=>2, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery'=>2, 'price' => 200]);

       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery'=>2, 'price' => 300]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery'=>2, 'price' => 400]);

       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery'=>2, 'price' => 500]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 2, 'pay_surgery'=>2, 'price' => 250]);
    }

   
}
