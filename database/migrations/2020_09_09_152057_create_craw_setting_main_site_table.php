<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrawSettingMainSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('craw_setting_main_site', function (Blueprint $table) {
            $table->id();
            $table->string('url_websites',255);
            $table->integer('status');
            $table->string('flag_check_duplicate_title',255);
            $table->string('flag_check_duplicate_content',255);
            $table->string('flag_check_duplicate_url',255);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('craw_setting_main_site');
    }
}
