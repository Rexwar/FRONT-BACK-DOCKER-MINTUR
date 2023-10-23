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
        Schema::table('establishment_forms_intents', function (Blueprint $table) {
            $table->boolean('is_finished')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishment_forms_intents', function (Blueprint $table) {
            $table->dropColumn('is_finished');
        });
    }
};
