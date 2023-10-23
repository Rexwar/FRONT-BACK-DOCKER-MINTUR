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
            $table->boolean('has_register_tourist')->nullable();
            $table->string('register_number')->nullable();
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
            $table->dropColumn('has_register_tourist');
            $table->dropColumn('register_number');
        });
    }
};
