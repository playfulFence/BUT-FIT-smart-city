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
            $table->timestamps();
            $table->string("title");
            $table->text("description")->nullable(true);
            $table->string("state");
            $table->string("address");
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('problem_id')->nullable(true);

            $table->index('user_id','tickets_user_idx');
            $table->index('manager_id','tickets_manager_idx');
            $table->index('problem_id','tickets_problem_idx');

            $table->foreign('user_id','tickets_user_fk')->on('users')->references('id');
            $table->foreign('manager_id','tickets_manager_fk')->on('managers')->references('id');
            $table->foreign('problem_id','tickets_problem_fk')->on('problems')->references('id');
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
