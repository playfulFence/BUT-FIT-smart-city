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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string("title","255");
            $table->string("description","15000")->nullable(true);
            $table->string("address","255");

            $table->unsignedBigInteger("ticket_status_id");
            $table->unsignedBigInteger('user_id')->default('1');
            $table->unsignedBigInteger('manager_id')->nullable(true);
            $table->unsignedBigInteger('problem_id')->nullable(true);

            $table->index('ticket_status_id','tickets_ticket_status_idx');
            $table->index('user_id','tickets_user_idx');
            $table->index('manager_id','tickets_manager_idx');
            $table->index('problem_id','tickets_problem_idx');

            $table->foreign('ticket_status_id','tickets_ticket_status_fk')->on('ticket_statuses')->references('id');
            $table->foreign('user_id','tickets_user_fk')->on('users')->references('id');
            $table->foreign('manager_id','tickets_manager_fk')->on('managers')->references('id');
            $table->foreign('problem_id','tickets_problem_fk')->on('problems')->references('id');
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
        Schema::dropIfExists('tickets');
    }
};
