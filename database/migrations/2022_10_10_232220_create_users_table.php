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
            $table->string("name","255");
            $table->string("lastname","255");
            $table->string("email","255")->unique("email");
            $table->string("password","255");
            $table->string("remember_token")->nullable(true);
            $table->date("birthday")->nullable(true);
            $table->string("phone","15")->unique()->nullable(true);
            $table->string('photo')->nullable(true);
            $table->boolean("specialization")->default(false);
            $table->boolean("approved")->default(false);
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
