<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishment_forms_intents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id');
            $table->foreignId('establishment_id');
            $table->unsignedBigInteger('attempts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishment_forms_intents');
    }
};
