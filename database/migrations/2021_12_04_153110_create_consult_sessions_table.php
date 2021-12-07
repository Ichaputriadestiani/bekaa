<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consult_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('mentor_id'); // users id value when role is mentor
            $table->string('topic');
            $table->string('start_at');
            $table->string('end_at');
            $table->string('link');
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
        Schema::dropIfExists('consult_sessions');
    }
}
