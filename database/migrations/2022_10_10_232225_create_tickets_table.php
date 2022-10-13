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
            $table->string("title");
            $table->text("description");
            $table->string("state");
            $table->string("address");
            $table->foreignIdFor(\App\Models\Problem::class,'problem_id');
            $table->foreignIdFor(\App\Models\User::class,'author_id');
            $table->foreignIdFor(\App\Models\CityManager::class, 'city_manager_id');

            $table->foreign("problem_id","ticket_problem_fk")->on("problems")->references("id");
            $table->foreign("author_id","ticket_author_fk")->on("users")->references("id");
            $table->foreign("city_manager_id","ticket_manager_fk")->on("city_managers")->references("manager_id");
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
