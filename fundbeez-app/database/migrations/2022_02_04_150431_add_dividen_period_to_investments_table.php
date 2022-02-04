<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDividenPeriodToInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investments', function (Blueprint $table) {
            $table->integer('dividen_period')->nullable()->after('dividen');
            $table->integer('amount_per_stock')->nullable()->after('public_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investments', function (Blueprint $table) {
            $table->dropColumn('dividen_period');
            $table->dropColumn('amount_per_stock');
        });
    }
}
