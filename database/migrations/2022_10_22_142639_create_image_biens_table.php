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
        Schema::create('image_biens', function (Blueprint $table) {
            $table->id();
            $table->uuid('token')->nullable();
            $table->string('name');
            $table->string('path')->nullable();
            $table->unsignedBigInteger('bien_id')->nullable();
            $table->foreign('bien_id')
                    ->references('id')->on('biens')
                    ->onUpdate('cascade')
                    ->onDelete('set null');
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
        Schema::dropIfExists('image_biens');
    }
};
