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
            $table->text("description");
            $table->string("state");
            $table->foreignIdFor(\App\Models\CityManager::class,"city_manager_id");
            $table->foreign("city_manager_id","problems_manager_fk")->on("city_managers")->references("manager_id");

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
