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
        Schema::create('alumnus_bio', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("middlename");
            $table->string("lastname");
            $table->string("gender");
            $table->year("batch");
            $table->foreignId("cource_id");
            $table->string("email");
            $table->string("connected_to");
            $table->string("avatar");
            $table->enum("status", [0,1]);
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
        Schema::dropIfExists('alumnus_bio');
    }
};
