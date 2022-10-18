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
        Schema::create('city_managers', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\User::class,"manager_id")->primary();
            $table->foreign("manager_id","manager_user_fk")->on("users")->references("id");
            $table->string("speciality");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_managers');
    }
};
