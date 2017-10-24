<?php

use yii\db\Migration;

class m171024_065215_add_items_admin_menu extends Migration
{
    public function safeUp()
    {
        //$this->insert('{{%menu_link}}', ['id' => 'osago-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 100]);
        //$this->insert('{{%menu_link_lang}}', ['link_id' => 'osago-main', 'label' => 'OSAGO', 'language' => 'en-US']);
        //$this->insert('{{%menu_link}}', ['id' => 'osago', 'menu_id' => 'admin-menu', 'link' => 'epl/osago', 'parent_id'=>'osago-main', 'image' => '', 'created_by' => 1, 'order' => 100]);
        //$this->insert('{{%menu_link_lang}}', ['link_id' => 'osago', 'label' => 'OSAGO', 'language' => 'en-US']);

        $this->insert('{{%menu_link}}', ['id' => 'travel-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 101]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'travel-main', 'label' => 'Travel', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'travel', 'menu_id' => 'admin-menu', 'link' => 'epl/travel','parent_id'=>'travel-main', 'image' => '', 'created_by' => 1, 'order' => 101]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'travel', 'label' => 'Travel', 'language' => 'en-US']);

        $this->insert('{{%menu_link}}', ['id' => 'live-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 102]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'live-main', 'label' => 'Live', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'live', 'menu_id' => 'admin-menu', 'link' => 'epl/live', 'parent_id'=>'live-main', 'image' => '', 'created_by' => 1, 'order' => 102]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'live', 'label' => 'Live', 'language' => 'en-US']);


        $this->insert('{{%menu_link}}', ['id' => 'realty-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 103]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'realty-main', 'label' => 'Realty', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'realty', 'menu_id' => 'admin-menu', 'link' => 'epl/realty', 'parent_id'=>'realty-main', 'image' => '', 'created_by' => 1, 'order' => 103]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'realty', 'label' => 'Realty', 'language' => 'en-US']);

    }

    public function safeDown()
    {
        echo "m171024_065215_add_items_admin_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171024_065215_add_items_admin_menu cannot be reverted.\n";

        return false;
    }
    */
}
