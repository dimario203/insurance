<?php

use yii\db\Migration;

class m171027_190542_create_travel_accident_table extends Migration
{
    public function Up()
    {
        $this->createTable('travel_accident', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'country_id' => $this->integer()->notNull(),
            'duration' => $this->SmallInteger(3)->notNull(),
            'sum_insured' => $this->integer()->notNull(),
            'price' => $this->integer(),
        ]);

        /*$this->createIndex(
            'idx-tr-acci_comp_cntr_dur_sum',
            'travel_accident',
            ['company_id', 'country_id', 'duration', 'sum_insured']
        );*/

        $this->createIndex(
            'idx-tr-acci_company_id',
            'travel_accident',
            'company_id'
        );

        $this->addForeignKey(
            'fk-tr-acci_company_id',
            'travel_accident',
            'company_id',
            'company',
            'company_id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-tr-acci_country_id',
            'travel_accident',
            'country_id'
        );

        $this->addForeignKey(
            'fk-tr-acci_country_id',
            'travel_accident',
            'country_id',
            'country',
            'country_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-tr-acci_country_id',
            'travel_accident'
        );

        $this->dropIndex(
            'idx-tr-acci_country_id',
            'travel_accident'
        );

        $this->dropForeignKey(
            'fk-tr-acci_company_id',
            'travel_accident'
        );

        $this->dropIndex(
          'idx-tr-acci_company_id',
          'travel_accident'
        );

        /*$this->dropIndex(
            'idx-tr-acci_comp_cntr_dur_sum',
            'travel_accident'
        );*/

        $this->dropTable('travel_accident');
    }
}
