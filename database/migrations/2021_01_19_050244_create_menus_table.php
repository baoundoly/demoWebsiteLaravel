<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->integer('module_id')->default(1);
            $table->integer('parent');
            $table->string('url_path');
            $table->integer('sort');
            $table->string('icon');
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        //Seeding table
        DB::table('menus')->insert(
            array(
                array('id' => '11','name' => 'Site Setting Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '1','icon' => 'ion-arrow-move','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:46:11','updated_at' => '2022-12-15 13:46:11'),
                array('id' => '12','name' => 'Site Setting','module_id' => '1','parent' => '11','url_path' => 'admin/site-setting-management/site-setting-info/list','sort' => '1','icon' => 'ion-arrow-shrink','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:47:28','updated_at' => '2022-12-15 13:47:28'),
                array('id' => '13','name' => 'Email Configuration','module_id' => '1','parent' => '11','url_path' => 'admin/site-setting-management/email-configuration-info/list','sort' => '2','icon' => 'ion-arrow-shrink','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:47:28','updated_at' => '2022-12-15 13:47:28'),
                array('id' => '14','name' => 'Module','module_id' => '1','parent' => '11','url_path' => 'admin/site-setting-management/module-info/list','sort' => '3','icon' => 'ion-log-in','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:48:33','updated_at' => '2022-12-15 13:48:33'),
                array('id' => '15','name' => 'Menu','module_id' => '1','parent' => '11','url_path' => 'admin/site-setting-management/menu-info/list','sort' => '4','icon' => 'ion-arrow-shrink','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:47:28','updated_at' => '2022-12-15 13:47:28'),
                array('id' => '16','name' => 'Role Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '2','icon' => 'ion-log-out','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:49:50','updated_at' => '2022-12-15 13:49:50'),
                array('id' => '17','name' => 'Role List','module_id' => '1','parent' => '16','url_path' => 'admin/role-management/role-info/list','sort' => '1','icon' => 'ion-heart-broken','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:50:58','updated_at' => '2022-12-15 13:57:31'),
                array('id' => '18','name' => 'Role Permission','module_id' => '1','parent' => '16','url_path' => 'admin/role-management/role-permission-info/list','sort' => '2','icon' => 'ion-help-buoy','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:52:30','updated_at' => '2022-12-15 13:52:30'),
                array('id' => '19','name' => 'Profile Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '3','icon' => 'ion-log-out','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:49:50','updated_at' => '2022-12-15 13:49:50'),
                array('id' => '20','name' => 'Profile Info','module_id' => '1','parent' => '19','url_path' => 'admin/profile-management/profile-info/profile','sort' => '1','icon' => 'ion-heart-broken','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:50:58','updated_at' => '2022-12-15 13:57:31'),
                array('id' => '21','name' => 'Change Password','module_id' => '1','parent' => '19','url_path' => 'admin/change-password','sort' => '2','icon' => 'ion-help-buoy','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:52:30','updated_at' => '2022-12-15 13:52:30'),
                array('id' => '22','name' => 'User Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '4','icon' => 'ion-log-out','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:49:50','updated_at' => '2022-12-15 13:49:50'),
                array('id' => '23','name' => 'User List','module_id' => '1','parent' => '22','url_path' => 'admin/user-management/user-info/list','sort' => '1','icon' => 'ion-heart-broken','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:50:58','updated_at' => '2022-12-15 13:57:31'),
                array('id' => '31','name' => 'Member Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '7','icon' => 'ion-log-out','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:49:50','updated_at' => '2022-12-15 13:49:50'),
                array('id' => '32','name' => 'Member List','module_id' => '1','parent' => '31','url_path' => 'admin/member-management/member-info/list','sort' => '1','icon' => 'ion-heart-broken','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2022-12-15 13:50:58','updated_at' => '2022-12-15 13:57:31'),
                array('id' => '33','name' => 'Post Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '6','icon' => 'ion-log-out','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-07 16:51:15','updated_at' => '2024-03-19 11:44:15'),
                array('id' => '34','name' => 'Post','module_id' => '1','parent' => '33','url_path' => 'admin/post-management/post-info/list','sort' => '1','icon' => 'ion-ionic','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-07 16:52:10','updated_at' => '2024-03-07 16:52:40'),
                array('id' => '35','name' => 'Home Management','module_id' => '1','parent' => '0','url_path' => '#','sort' => '8','icon' => 'ion-log-out','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-07 17:47:51','updated_at' => '2024-03-07 17:47:51'),
                array('id' => '36','name' => 'Slider','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/slider-info/list','sort' => '1','icon' => 'ion-help-buoy','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-07 17:53:47','updated_at' => '2024-03-07 17:53:47'),
                array('id' => '37','name' => 'About','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/about-info/list','sort' => '2','icon' => 'ion-document-text','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-07 18:39:35','updated_at' => '2024-03-07 18:39:35'),
                array('id' => '38','name' => 'Product','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/product-info/list','sort' => '3','icon' => 'ion-filing','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-07 18:40:54','updated_at' => '2024-03-07 18:40:54'),
                array('id' => '39','name' => 'Project','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/project-info/list','sort' => '4','icon' => 'ion-briefcase','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-13 09:26:22','updated_at' => '2024-03-13 09:26:22'),
                array('id' => '40','name' => 'Service','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/service-info/list','sort' => '5','icon' => 'ion-map','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-13 12:49:34','updated_at' => '2024-03-13 12:49:34'),
                array('id' => '41','name' => 'Stock','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/stock-info/list','sort' => '3','icon' => 'ion-folder','status' => '1','created_by' => '1','updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-19 10:25:37','updated_at' => '2024-03-19 10:26:15'),
                array('id' => '42','name' => 'Image','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/image-info/list','sort' => '7','icon' => 'ion-images','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-20 15:16:52','updated_at' => '2024-03-20 15:16:52'),
                array('id' => '43','name' => 'Nav','module_id' => '1','parent' => '35','url_path' => 'admin/home-management/nav-info/list','sort' => '8','icon' => 'ion-drag','status' => '1','created_by' => NULL,'updated_by' => NULL,'deleted_by' => NULL,'deleted_at' => NULL,'created_at' => '2024-03-21 10:56:35','updated_at' => '2024-03-21 10:56:35')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
