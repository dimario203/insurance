<?php

use yii\db\Migration;

/**
 * Class m171124_164658_add_row_to_realty
 */
class m171124_164658_add_row_to_realty extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 100]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 200]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 400]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 900]);




        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);



        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->insert('{{%realty}}', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->insert('{{%realty}}', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->insert('{{%realty}}', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->insert('{{%realty}}', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 100]);
       $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 200]);
       $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 300]);
       $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 400]);


       $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 300]);
       $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 700]);
       $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 800]);
       $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 0, 'civil_resp' => 0, 'price' => 900]);
        
        
        $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);


        $this->delete('realty', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 1, 'lease' => 0, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->delete('realty', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->delete('realty', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 0, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);





        $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->delete('realty', ['company_id' => 1, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 1, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);


        $this->delete('realty', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 100]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 200]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 300]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 1, 'lease' => 1, 'constraction_price' => 1, 'civil_resp' => 1, 'price' => 400]);


        $this->delete('realty', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 2, 'civil_resp' => 2, 'price' => 900]);

        $this->delete('realty', ['company_id' => 1, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1300]);
        $this->delete('realty', ['company_id' => 2, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1700]);
        $this->delete('realty', ['company_id' => 3, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1800]);
        $this->delete('realty', ['company_id' => 4, 'region_id' => 2, 'repair_price' => 2, 'lease' => 1, 'constraction_price' => 3, 'civil_resp' => 3, 'price' => 1900]);
    }
}
