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
        Schema::create('images', function (Blueprint $table) {
            $table->unsignedBigInteger("image_id");
            $table->unsignedBigInteger('ticket_id');
            $table->index('ticket_id','images_ticket_idx');
            $table->foreign('ticket_id','images_ticket_fk')->on('tickets')->references('id');
            $table->primary(['image_id','ticket_id']);
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
        Schema::dropIfExists('images');
    }
};
