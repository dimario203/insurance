<?php

use yii\db\Migration;

class m171027_214030_create_additional_paid_table extends Migration
{
    public function Up()
    {
        $this->createTable('additional_paid', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'paid_id' => $this->integer()->notNull(),
            'price' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-add-paid-comp_paid',
            'additional_paid',
            ['company_id', 'paid_id']
        );

        $this->createIndex(
            'idx-add-paid-company_id',
            'additional_paid',
            'company_id'
        );

        $this->addForeignKey(
            'fk-add-paid-company_id',
            'additional_paid',
            'company_id',
            'company',
            'company_id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-add-paid-paid_id',
            'additional_paid',
            'paid_id'
        );

        $this->addForeignKey(
            'fk-add-paid-paid_id',
            'additional_paid',
            'paid_id',
            'type_additional_paid',
            'paid_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-add-paid-paid_id',
            'additional_paid'
        );

        $this->dropIndex(
            'idx-add-paid-paid_id',
            'additional_paid'
        );

        $this->dropForeignKey(
            'fk-add-paid-company_id',
            'additional_paid'
        );

        $this->dropIndex(
            'idx-add-paid-company_id',
            'additional_paid'
        );

        $this->dropIndex(
            'idx-add-paid-comp_paid',
            'additional_paid'
        );

        $this->dropTable('additional_paid');
    }
}
