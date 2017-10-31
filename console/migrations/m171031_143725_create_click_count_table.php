<?php

use yii\db\Migration;

class m171031_143725_create_click_count_table extends Migration
{
    public function Up()
    {
        $this->createTable('click_count', [
            'id' => $this->primaryKey(),
            'polis_type' => $this->SmallInteger(1)->notNull(),
            'date' => $this->integer()->notNull(),
            'region_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-click_count_pol_type',
            'click_count',
            'polis_type'
        );

        $this->createIndex(
            'idx-click_count_date',
            'click_count',
            'date'
        );

        $this->createIndex(
            'idx-click_count_region_id',
            'click_count',
            'region_id'
        );

        $this->createIndex(
            'idx-click_count_pol_type_date_region_id',
            'click_count',
            ['polis_type', 'date', 'region_id']
        );

        $this->createIndex(
            'idx-click_count_pol_type_date',
            'click_count',
            ['polis_type', 'date']
        );

        $this->addForeignKey(
            'fk-click_count-region_id',
            'click_count',
            'region_id',
            'region',
            'region_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-click_count-region_id',
            'click_count'
        );

        $this->dropIndex(
            'idx-click_count_pol_type_date',
            'click_count'
        );

        $this->dropIndex(
            'idx-click_count_pol_type_date_region_id',
            'click_count'
        );

        $this->dropIndex(
            'idx-click_count_region_id',
            'click_count'
        );

        $this->dropIndex(
            'idx-click_count_date',
            'click_count'
        );

        $this->dropIndex(
            'idx-click_count_pol_type',
            'click_count'
        );

        $this->dropTable('click_count');
    }
}
