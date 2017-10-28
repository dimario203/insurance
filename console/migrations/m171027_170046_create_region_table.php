<?php

use yii\db\Migration;

class m171027_170046_create_region_table extends Migration
{
    public function Up()
    {
        $this->createTable('region', [
            'region_id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'locality_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-region-locality_id',
            'region',
            'locality_id'
        );


        $this->addForeignKey(
            'fk-region-region_id',
            'region',
            'locality_id',
            'locality',
            'locality_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-region-region_id',
            'region'
        );

        $this->dropIndex(
            'idx-region-locality_id',
            'region'
        );

        $this->dropTable('region');
    }
}
