<?php

use yii\db\Migration;

/**
 * Class m171123_092323_add_rows_to_additional_payds
 */
class m171123_092323_add_rows_to_additional_payds extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 1, 'price' => 100]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 2, 'price' => 200]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 3, 'price' => 250]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 4, 'price' => 300]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 5, 'price' => 400]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 6, 'price' => 450]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 7, 'price' => 500]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 8, 'price' => 600]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 9, 'price' => 700]);
        $this->insert('{{%additional_paid}}', ['company_id' => 1, 'paid_id' => 10, 'price' => 800]);

        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 1, 'price' => 100]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 2, 'price' => 200]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 3, 'price' => 250]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 4, 'price' => 300]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 5, 'price' => 400]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 6, 'price' => 450]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 7, 'price' => 500]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 8, 'price' => 600]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 9, 'price' => 700]);
        $this->insert('{{%additional_paid}}', ['company_id' => 2, 'paid_id' => 10, 'price' => 800]);

        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 1, 'price' => 100]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 2, 'price' => 200]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 3, 'price' => 250]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 4, 'price' => 300]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 5, 'price' => 400]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 6, 'price' => 450]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 7, 'price' => 500]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 8, 'price' => 600]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 9, 'price' => 700]);
        $this->insert('{{%additional_paid}}', ['company_id' => 3, 'paid_id' => 10, 'price' => 800]);

        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 1, 'price' => 100]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 2, 'price' => 200]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 3, 'price' => 250]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 4, 'price' => 300]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 5, 'price' => 400]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 6, 'price' => 450]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 7, 'price' => 500]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 8, 'price' => 600]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 9, 'price' => 700]);
        $this->insert('{{%additional_paid}}', ['company_id' => 4, 'paid_id' => 10, 'price' => 800]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 1, 'price' => 100]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 2, 'price' => 200]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 3, 'price' => 250]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 4, 'price' => 300]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 5, 'price' => 400]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 6, 'price' => 450]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 7, 'price' => 500]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 8, 'price' => 600]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 9, 'price' => 700]);
        $this->delete('additional_paid', ['company_id' => 1, 'paid_id' => 10, 'price' => 800]);

        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 1, 'price' => 100]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 2, 'price' => 200]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 3, 'price' => 250]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 4, 'price' => 300]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 5, 'price' => 400]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 6, 'price' => 450]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 7, 'price' => 500]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 8, 'price' => 600]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 9, 'price' => 700]);
        $this->delete('additional_paid', ['company_id' => 2, 'paid_id' => 10, 'price' => 800]);

        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 1, 'price' => 100]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 2, 'price' => 200]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 3, 'price' => 250]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 4, 'price' => 300]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 5, 'price' => 400]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 6, 'price' => 450]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 7, 'price' => 500]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 8, 'price' => 600]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 9, 'price' => 700]);
        $this->delete('additional_paid', ['company_id' => 3, 'paid_id' => 10, 'price' => 800]);

        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 1, 'price' => 100]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 2, 'price' => 200]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 3, 'price' => 250]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 4, 'price' => 300]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 5, 'price' => 400]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 6, 'price' => 450]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 7, 'price' => 500]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 8, 'price' => 600]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 9, 'price' => 700]);
        $this->delete('additional_paid', ['company_id' => 4, 'paid_id' => 10, 'price' => 800]);
    }
}
