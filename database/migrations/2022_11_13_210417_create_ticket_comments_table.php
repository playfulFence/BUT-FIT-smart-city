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
        Schema::create('ticket_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('comment_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('ticket_id');
            $table->text('content');

            $table->index('user_id','ticket_comments_user_idx');
            $table->index('ticket_id','ticket_comments_ticket_idx');

            $table->foreign('user_id','ticket_comments_user_fk')->on('users')->references('id');
            $table->foreign('ticket_id','ticket_comments_ticket_fk')->on('tickets')->references('id');

            $table->primary(['comment_id', 'ticket_id']);
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
        Schema::dropIfExists('ticket_comments');
    }
};
