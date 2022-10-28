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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->uuid('token')->nullable();
            $table->string('reference')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location');
            $table->float('price')->default(0);
            $table->string('area')->default(0);
            $table->integer('beds')->default(0);
            $table->integer('baths')->default(0);
            $table->integer('garage')->default(0);
            $table->string('status')->default('Pending');
            $table->string('video')->nullable();
            $table->string('plan')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->unsignedBigInteger('type_bien_id')->nullable();
            $table->foreign('type_bien_id')
                    ->references('id')->on('type_biens')
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
        Schema::dropIfExists('biens');
    }
};
