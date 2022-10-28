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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->uuid('token')->nullable();
            $table->string('title');
            $table->string('subtitle');
            $table->string('image')->nullable();
            $table->string('path')->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('type_article_id')->nullable();
            $table->foreign('type_article_id')
                    ->references('id')->on('type_articles')
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
        Schema::dropIfExists('articles');
    }
};
