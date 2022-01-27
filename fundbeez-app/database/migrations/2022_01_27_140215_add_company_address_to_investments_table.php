<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyAddressToInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investments', function (Blueprint $table) {
            $table->string('company_address')->after('owner_image');
            $table->string('facebook')->nullable()->after('instagram');
            $table->string('linkedin')->nullable()->after('facebook');
            $table->string('company_website')->nullable()->after('linkedin');
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
            $table->dropColumn('company_address');
            $table->dropColumn('facebook');
            $table->dropColumn('linkedin');
            $table->dropColumn('company_website');
        });
    }
}
