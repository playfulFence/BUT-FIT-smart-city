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
        Schema::create('service_requirements', function (Blueprint $table) {
            $table->id();
            $table->dateTime("report_time");
            $table->dateTime("estimated_time");
            $table->foreignIdFor(\App\Models\Problem::class, "problem_id");
            $table->foreign("problem_id","requirement_problem_fk")->on("problems")->references("id");
            $table->foreignIdFor(\App\Models\TechnicalSpecialist::class, "technical_specialist_id");
            $table->foreign("technical_specialist_id","requirement_spec_fk")->on("technical_specialists")->references("spec_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_requirements');
    }
};
