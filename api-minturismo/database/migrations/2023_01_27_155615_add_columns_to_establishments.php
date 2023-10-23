<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establishments', function (Blueprint $table) {
            //
            $table->string('ruc')->nullable();
            $table->string('type_of_taxpayer')->nullable();
            $table->string('province')->nullable();
            $table->string('canton')->nullable();
            $table->string('parrish')->nullable();
            $table->string('direction')->nullable();
            $table->string('start_year_operations')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishments', function (Blueprint $table) {
            //
            $table->dropColumn('ruc');
            $table->dropColumn('type_of_taxpayer');
            $table->dropColumn('province');
            $table->dropColumn('canton');
            $table->dropColumn('parrish');
            $table->dropColumn('direction');
            $table->dropColumn('start_year_operations');
        });
    }
};
