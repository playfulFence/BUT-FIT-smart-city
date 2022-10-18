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
        Schema::create('comment_serv_reqs', function (Blueprint $table) {
            $table->unsignedBigInteger("serves_comment_id");
            $table->foreignIdFor(\App\Models\ServiceRequirement::class, "requirement_id");
            $table->foreign("requirement_id","comment_requirement_fk")->on("service_requirements")->references("id");
            $table->primary(['serves_comment_id', 'requirement_id']);
            $table->text('text');
            $table->foreignIdFor(\App\Models\User::class, "sender_id");
            $table->foreign("sender_id","comment_user_fk")->on("users")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_serv_reqs');
    }
};
