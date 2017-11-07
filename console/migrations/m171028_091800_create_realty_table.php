<?php

use yii\db\Migration;

class m171028_091800_create_realty_table extends Migration
{
    public function Up()
    {
        $this->createTable('realty', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'region_id' => $this->integer()->notNull(),
            'repair_price' => $this->integer()->notNull(),
            'lease' => $this->SmallInteger(1)->notNull(),
            'constraction_price' => $this->integer()->notNull()->defaultValue(0),
            'civil_resp' => $this->integer()->notNull()->defaultValue(0),
            'price' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-realty-reg_rep_leas_constr_civ',
            'realty',
            ['region_id', 'repair_price', 'lease', 'constraction_price', 'civil_resp']
        );

        $this->createIndex(
            'idx-realty-company_id',
            'realty',
            'company_id'
        );

        $this->addForeignKey(
            'fk-realty-company_id',
            'realty',
            'company_id',
            'company',
            'company_id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-realty-region_id',
            'realty',
            'region_id'
        );

        $this->addForeignKey(
            'fk-realty-region_id',
            'realty',
            'region_id',
            'region',
            'region_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-realty-region_id',
            'realty'
        );

        $this->dropIndex(
            'idx-realty-region_id',
            'realty'
        );

        $this->dropForeignKey(
            'fk-realty-company_id',
            'realty'
        );

        $this->dropIndex(
            'idx-realty-company_id',
            'realty'
        );

        $this->dropIndex(
            'idx-realty-reg_rep_leas_constr_civ',
            'realty'
        );

        $this->dropTable('realty');
    }
}
