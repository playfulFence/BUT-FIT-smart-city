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
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable(true);
            $table->string("state");
            $table->unsignedBigInteger('manager_id');
            $table->index('manager_id','problems_manager_idx');
            $table->foreign('manager_id','problems_manager_fk')->on('managers')->references('id');

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
        Schema::dropIfExists('problems');
    }
};
