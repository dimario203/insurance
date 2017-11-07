<?php

use yii\db\Migration;

class m171028_090646_create_live_table extends Migration
{
    public function Up()
    {
        $this->createTable('live', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'age' => $this->SmallInteger(3)->notNull(),
            'sum_insured' => $this->integer()->notNull(),
            'work' => $this->SmallInteger(1)->notNull(),
            'pay_hospital' => $this->integer()->notNull(),
            'pay_surgery' => $this->integer()->notNull(),
            'price' => $this->integer(),
        ]);

        /*$this->createIndex(
            'idx-live-age_sum_work_payh_pays',
            'live',
            ['age', 'sum_insured', 'work', 'pay_hospital', 'pay_surgery']
        );*/

        $this->createIndex(
            'idx-live-company_id',
            'live',
            'company_id'
        );

        $this->addForeignKey(
            'fk-live-company_id',
            'live',
            'company_id',
            'company',
            'company_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-live-company_id',
            'live'
        );

        $this->dropIndex(
            'idx-live-company_id',
            'live'
        );

        /*$this->dropIndex(
            'idx-live-age_sum_work_payh_pays',
            'live'
        );*/

        $this->dropTable('live');
    }
}
