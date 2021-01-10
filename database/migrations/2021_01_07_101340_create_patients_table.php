<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('national_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();;
            $table->string('work')->nullable();
            $table->string('photo');

            $table->string('mobile')->nullable();;
            $table->string('job_title');
            $table->string('description')->nullable();

            $table->string('birth_place');
            $table->date('birth_day');

            $table->string('work_place')->nullable();;
            $table->string('current_place');

            $table->foreignId('account_id')->nullable()->constrained()->onDelete('cascade'); // belongsToAccount
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');


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
        Schema::dropIfExists('patients');
    }
}
