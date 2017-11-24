<?php

use yii\db\Migration;

/**
 * Class m171124_090741_add_rows_to_live
 */
class m171124_090741_add_rows_to_live extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
        
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);

        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);



        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);

        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);

        
        

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);

        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
        $this->insert('{{%live}}', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 100]);

       $this->delete('live', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);

       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 150]);

       $this->delete('live', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);
       $this->delete('live', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);
       $this->delete('live', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' =>300]);

       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);

       $this->delete('live', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);
       $this->delete('live', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 100]);

       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 350]);

       $this->delete('live', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);
       $this->delete('live', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);
       $this->delete('live', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 150]);

       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 450]);

       $this->delete('live', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 250]);

       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 550]);

       $this->delete('live', ['company_id' => 1, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 1, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 1, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 1, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);



       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);

       $this->delete('live', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);

       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);

       $this->delete('live', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);

       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);

       $this->delete('live', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);

       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);

       $this->delete('live', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
       $this->delete('live', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
       $this->delete('live', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);

       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);

       $this->delete('live', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
       $this->delete('live', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
       $this->delete('live', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);

       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);

       $this->delete('live', ['company_id' => 2, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
       $this->delete('live', ['company_id' => 2, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
       $this->delete('live', ['company_id' => 2, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
       $this->delete('live', ['company_id' => 2, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);




       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 200]);

       $this->delete('live', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);
       $this->delete('live', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 250]);

       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 350]);

       $this->delete('live', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);
       $this->delete('live', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 100]);

       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 300]);

       $this->delete('live', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);
       $this->delete('live', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 1, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 400]);

       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 450]);

       $this->delete('live', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
       $this->delete('live', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);
       $this->delete('live', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 1, 'pay_surgery'=>1, 'price' => 550]);

       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 600]);

       $this->delete('live', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
       $this->delete('live', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);
       $this->delete('live', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>1, 'price' => 400]);

       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 650]);

       $this->delete('live', ['company_id' => 3, 'age' => 0, 'sum_insured' => 0, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
       $this->delete('live', ['company_id' => 3, 'age' => 1, 'sum_insured' => 1, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
       $this->delete('live', ['company_id' => 3, 'age' => 2, 'sum_insured' => 2, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
       $this->delete('live', ['company_id' => 3, 'age' => 3, 'sum_insured' => 3, 'work' => 0, 'pay_hospital' => 0, 'pay_surgery'=>0, 'price' => 200]);
    }
}
