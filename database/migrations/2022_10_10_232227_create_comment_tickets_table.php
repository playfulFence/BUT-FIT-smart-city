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
        Schema::create('comment_tickets', function (Blueprint $table) {
            $table->unsignedBigInteger("ticket_comment_id");
            $table->foreignIdFor(\App\Models\Ticket::class,'ticket_id');
            $table->foreign("ticket_id","comments_ticket_fk")->on("tickets")->references("id");
            $table->text("text");
            $table->primary(['ticket_comment_id','ticket_id']);
            $table->foreignIdFor(\App\Models\User::class,"sender_id");
            $table->foreign("sender_id","sender_comment_fk")->on("users")->references("id");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_tickets');
    }
};
