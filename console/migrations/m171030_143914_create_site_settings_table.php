<?php

use yii\db\Migration;

class m171030_143914_create_site_settings_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('site_settings', [
            'id' => $this->primaryKey(),
            'is_available' => $this->SmallInteger(1)->notNull()->defaultValue(1),
            'find_all' => $this->SmallInteger(1)->notNull()->defaultValue(1),
            'find_osago' => $this->SmallInteger(1)->notNull()->defaultValue(1),
            'find_travel' => $this->SmallInteger(1)->notNull()->defaultValue(1),
            'find_live' => $this->SmallInteger(1)->notNull()->defaultValue(1),
            'find_realty' => $this->SmallInteger(1)->notNull()->defaultValue(1),
            'find_kasko' => $this->SmallInteger(1)->notNull()->defaultValue(1),
        ]);

        $this->insert('{{%site_settings}}', ['is_available' => 1, 'find_all' => 1, 'find_osago' => 1, 'find_travel' => 1, 'find_live' => 1, 'find_realty' => 1, 'find_kasko' => 1]);
    }

    public function safeDown()
    {
        $this->delete('{{%site_settings}}', ['id'=>1]);
        $this->dropTable('site_settings');
    }
}
