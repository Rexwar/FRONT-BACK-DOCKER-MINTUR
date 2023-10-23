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
        Schema::create('catalog_geographic_classifiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable()->unsigned();
            $table->foreign('parent_id')->references('id')->on('catalog_geographic_classifiers');
            $table->string('code');
            $table->string('full_code')->nullable();
            $table->string('description')->nullable();
            $table->enum('type', ['CANTON', 'PARISH', 'PROVINCE'])->nullable();
            $table->integer('enabled')->default(1);
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
        Schema::dropIfExists('catalog_geographic_classifiers');
    }
};
