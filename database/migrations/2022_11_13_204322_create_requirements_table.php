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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->dateTime("report_time");
            $table->dateTime("estimated_time");

            $table->unsignedBigInteger('problem_id');
            $table->unsignedBigInteger('repair_id');

            $table->index('problem_id','requirements_problem_idx');
            $table->index('repair_id','requirements_repair_idx');

            $table->foreign('problem_id','requirements_problem_fk')->on('problems')->references('id');
            $table->foreign('repair_id','requirements_repair_fk')->on('repairs')->references('id');

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
        Schema::dropIfExists('requirements');
    }
};
