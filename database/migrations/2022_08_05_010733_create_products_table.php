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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('image_main')->nullable();
            $table->string('image_second')->nullable();
            $table->string('image_background')->nullable();
            $table->string('title_features')->nullable();
            $table->string('subtitle_features')->nullable();
            $table->string('color_main')->default("#FF3737");
            $table->text('features')->nullable();
            $table->decimal('price', 8, 2, false)->nullable();
            $table->string('status')->default('new');
            //interest_id is a foreign key to interests table
            $table->unsignedBigInteger('interest_id');
            $table->foreign('interest_id')->references('id')->on('interests');
            
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
        Schema::dropIfExists('products');
    }
};
