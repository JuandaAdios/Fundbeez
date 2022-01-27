<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_image');
            $table->string('owner_name');
            $table->string('owner_image');
            $table->bigInteger('category_id')->references('id')->on('investment_categories');
            $table->tinyInteger('status')->default(0);
            $table->integer('one_year_ago');
            $table->integer('two_year_ago');
            $table->integer('dividen');
            $table->integer('public_stock');
            $table->bigInteger('profit_prediction');
            $table->bigInteger('needed_fund');
            $table->string('video_profile');
            $table->string('instagram');
            $table->longText('caption');
            $table->bigInteger('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('investments');
    }
}
