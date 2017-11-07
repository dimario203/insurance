<?php

use yii\db\Migration;

class m171027_212252_create_Civil_responsibility_table extends Migration
{
    public function Up()
    {
        $this->createTable('civil_responsibility', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'country_id' => $this->integer()->notNull(),
            'duration' => $this->SmallInteger(3)->notNull(),
            'price' => $this->integer(),
        ]);

        /*$this->createIndex(
            'idx-civ-resp-comp_cntr_dur',
            'civil_responsibility',
            ['company_id', 'country_id', 'duration']
        );*/

        $this->createIndex(
            'idx-civ-resp-company_id',
            'civil_responsibility',
            'company_id'
        );

        $this->addForeignKey(
            'fk-civ-resp-company_id',
            'civil_responsibility',
            'company_id',
            'company',
            'company_id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-civ-resp-country_id',
            'civil_responsibility',
            'country_id'
        );

        $this->addForeignKey(
            'fk-civ-resp-country_id',
            'civil_responsibility',
            'country_id',
            'country',
            'country_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-civ-resp-country_id',
            'civil_responsibility'
        );

        $this->dropIndex(
            'idx-civ-resp-country_id',
            'civil_responsibility'
        );

        $this->dropForeignKey(
            'fk-civ-resp-company_id',
            'civil_responsibility'
        );

        $this->dropIndex(
            'idx-civ-resp-company_id',
            'civil_responsibility'
        );

        /*$this->dropIndex(
            'idx-civ-resp-comp_cntr_dur',
            'civil_responsibility'
        );*/

        $this->dropTable('civil_responsibility');
    }
}
