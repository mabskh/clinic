<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('email');
            $table->string('mobile');
            $table->string('job_title');
            $table->string('description')->nullable();

            $table->string('full_name');
            $table->integer('national_id');
            $table->string('birth_place');
            $table->date('birth_day');
            $table->string('mother_name');
            $table->string('work_place');
            $table->string('current_place');
            $table->string('photo');

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('accounts');
    }
}
