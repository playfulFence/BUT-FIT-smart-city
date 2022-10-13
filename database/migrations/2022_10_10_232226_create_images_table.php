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
            $table->foreignIdFor(\App\Models\Ticket::class,'ticket_id');
            $table->foreign("ticket_id","images_ticket_fk")->on("tickets")->references("id");
            $table->string("file_name");
            $table->primary(['image_id','ticket_id']);

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
