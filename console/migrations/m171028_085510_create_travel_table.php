<?php

use yii\db\Migration;

class m171028_085510_create_travel_table extends Migration
{
    public function Up()
    {
        $this->createTable('travel', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'country_id' => $this->integer()->notNull(),
            'duration' => $this->SmallInteger(3)->notNull(),
            'age' => $this->SmallInteger(3)->notNull(),
            'sum_insured' => $this->integer()->notNull(),
            'price' => $this->integer(),
        ]);

        /*$this->createIndex(
            'idx-travel-countr_dur_age_sum',
            'travel',
            ['country_id', 'duration', 'age', 'sum_insured']
        );*/

        $this->createIndex(
            'idx-travel-company_id',
            'travel',
            'company_id'
        );

        $this->addForeignKey(
            'fk-travel-company_id',
            'travel',
            'company_id',
            'company',
            'company_id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-travel-country_id',
            'travel',
            'country_id'
        );

        $this->addForeignKey(
            'fk-travel-country_id',
            'travel',
            'country_id',
            'country',
            'country_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-travel-country_id',
            'travel'
        );

        $this->dropIndex(
            'idx-travel-country_id',
            'travel'
        );

        $this->dropForeignKey(
            'fk-travel-company_id',
            'travel'
        );

        $this->dropIndex(
            'idx-travel-company_id',
            'travel'
        );

        /*$this->dropIndex(
            'idx-travel-countr_dur_age_sum',
            'travel'
        );*/

        $this->dropTable('travel');
    }
}
