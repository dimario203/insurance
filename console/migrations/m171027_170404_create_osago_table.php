<?php

use yii\db\Migration;

class m171027_170404_create_osago_table extends Migration
{
    public function Up()
    {
        $this->createTable('osago', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'region_id' => $this->integer()->notNull(),
            'power' => $this->SmallInteger(4)->notNull(),
            'age' => $this->SmallInteger(1)->notNull(),
            'experience' => $this->SmallInteger(1)->notNull(),
            'price' => $this->integer(),
        ]);

        /*$this->createIndex(
            'idx-osago-reg_pow_age_exp',
            'osago',
            ['region_id', 'power', 'age', 'experience']
        );*/

        $this->createIndex(
            'idx-osago-region_id',
            'osago',
            'region_id'
        );

        $this->addForeignKey(
            'fk-osago-region_id',
            'osago',
            'region_id',
            'region',
            'region_id',
            'CASCADE'
        );
    }

    public function Down()
    {
        $this->dropForeignKey(
            'fk-osago-region_id',
            'osago'
        );

        $this->dropIndex(
            'idx-osago-region_id',
            'osago'
        );

        /*$this->dropIndex(
            'idx-osago-reg_pow_age_exp',
            'osago'
        );*/

        $this->dropTable('osago');
    }


}
