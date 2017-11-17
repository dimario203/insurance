<?php

use yii\db\Migration;

/**
 * Class m171117_104403_create_social_networks_table
 */
class m171117_104403_create_social_networks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('social_networks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'url' => $this->string(),
        ]);

        $this->insert('{{%social_networks}}', ['id' => 1, 'name' => 'facebook', 'url' => '']);
        $this->insert('{{%social_networks}}', ['id' => 2, 'name' => 'vk', 'url' => '']);
        $this->insert('{{%social_networks}}', ['id' => 3, 'name' => 'google', 'url' => '']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->delete('{{%social_networks}}', ['id'=>[1, 2, 3]]);
        $this->dropTable('social_networks');
    }
}
