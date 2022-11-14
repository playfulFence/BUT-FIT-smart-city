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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique("email")->nullable(false);
            $table->string("password")->nullable(false);; //todo only for test
            $table->string("remember_token")->nullable(true);
            $table->timestamp("birthday")->nullable(false);
            $table->string("lastname")->nullable(false);
            $table->string("phone_number")->unique()->nullable(false);
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
        Schema::dropIfExists('users');
    }
};
