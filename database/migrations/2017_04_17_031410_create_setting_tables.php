<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_title')->comment('站点名称');
            $table->string('site_email')->comment('站点邮箱');
            $table->string('site_info')->comment('备案信息');
            $table->string('site_name')->comment('站长名字');
            $table->string('site_phone')->comment('联系电话');
            $table->string('site_icon')->comment('icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
