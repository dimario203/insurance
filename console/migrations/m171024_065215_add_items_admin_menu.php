<?php

use yii\db\Migration;

class m171024_065215_add_items_admin_menu extends Migration
{
    public function safeUp()
    {
        /*$this->insert('{{%menu_link}}', ['id' => 'osago-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 105]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'osago-main', 'label' => 'OSAGO', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'osago', 'menu_id' => 'admin-menu', 'link' => '/epl/osago', 'parent_id'=>'osago-main', 'image' => '', 'created_by' => 1, 'order' => 100]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'osago', 'label' => 'OSAGO', 'language' => 'en-US']);

        $this->insert('{{%menu_link}}', ['id' => 'travel-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 106]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'travel-main', 'label' => 'Travel', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'travel', 'menu_id' => 'admin-menu', 'link' => '/epl/travel','parent_id'=>'travel-main', 'image' => '', 'created_by' => 1, 'order' => 101]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'travel', 'label' => 'Travel', 'language' => 'en-US']);

        $this->insert('{{%menu_link}}', ['id' => 'live-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 107]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'live-main', 'label' => 'Live', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'live', 'menu_id' => 'admin-menu', 'link' => '/epl/live', 'parent_id'=>'live-main', 'image' => '', 'created_by' => 1, 'order' => 102]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'live', 'label' => 'Live', 'language' => 'en-US']);


        $this->insert('{{%menu_link}}', ['id' => 'realty-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 108]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'realty-main', 'label' => 'Realty', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'realty', 'menu_id' => 'admin-menu', 'link' => '/epl/realty', 'parent_id'=>'realty-main', 'image' => '', 'created_by' => 1, 'order' => 103]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'realty', 'label' => 'Realty', 'language' => 'en-US']);*/

        /*Comapanies*/
        $this->insert('{{%menu_link}}', ['id' => 'companies-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 99]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'companies-main', 'label' => 'Компании', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'view-companies', 'menu_id' => 'admin-menu', 'link' => '/epl/get-companies', 'parent_id'=>'companies-main', 'image' => '', 'created_by' => 1, 'order' => 99]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'view-companies', 'label' => 'Список Компаний', 'language' => 'en-US']);

        /*Site control*/
        $this->insert('{{%menu_link}}', ['id' => 'settings-site-controll', 'menu_id' => 'admin-menu', 'link' => '/site-settings/get-settings', 'parent_id'=>'settings', 'image' => '', 'created_by' => 1, 'order' => 0]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-site-controll', 'label' => 'Управление сайтом', 'language' => 'en-US']);

        /*Statistic*/
        $this->insert('{{%menu_link}}', ['id' => 'statistic-main', 'menu_id' => 'admin-menu', 'link' => '', 'image' => '', 'created_by' => 1, 'order' => 100]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'statistic-main', 'label' => 'Статистика', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'region-statistic', 'menu_id' => 'admin-menu', 'link' => '/epl/get-region-statistic', 'parent_id'=>'statistic-main', 'image' => '', 'created_by' => 1, 'order' => 100]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'region-statistic', 'label' => 'Статистика Регионов', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'company-statistic', 'menu_id' => 'admin-menu', 'link' => '/epl/get-company-statistic', 'parent_id'=>'statistic-main', 'image' => '', 'created_by' => 1, 'order' => 100]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'company-statistic', 'label' => 'Статистика Компаний', 'language' => 'en-US']);
        $this->insert('{{%menu_link}}', ['id' => 'dynamic-statistic', 'menu_id' => 'admin-menu', 'link' => '/epl/get-dynamic-statistic', 'parent_id'=>'statistic-main', 'image' => '', 'created_by' => 1, 'order' => 100]);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'dynamic-statistic', 'label' => 'Динамика покупок', 'language' => 'en-US']);
    }

    public function safeDown()
    {
        /*Statistic*/
        $this->delete('menu_link_lang', ['link_id' => 'dynamic-statistic', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'dynamic-statistic']);
        $this->delete('menu_link_lang', ['link_id' => 'company-statistic', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'company-statistic']);
        $this->delete('menu_link_lang', ['link_id' => 'region-statistic', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'region-statistic']);
        $this->delete('menu_link_lang', ['link_id' => 'statistic-main', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'statistic-main']);

        /*Site control*/
        $this->delete('menu_link_lang', ['link_id' => 'settings-site-controll', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'settings-site-controll']);

        /*Comapanies*/
        $this->delete('menu_link_lang', ['link_id' => 'view-companies', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'view-companies']);
        $this->delete('menu_link_lang', ['link_id' => 'companies-main', 'language' => 'en-US']);
        $this->delete('menu_link', ['id' => 'companies-main']);
    }
}
