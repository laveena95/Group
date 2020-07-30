<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 190)->unique();
            $table->string('dob')->nullable();
            $table->string('nic')->nullable();
            $table->string('passport')->nullable();
            $table->string('job')->nullable();
            $table->string('income')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password', 60);
            $table->string('avatar')->nullable();
            $table->string('family_details')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->string('remember_token', 100)->nullable();
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
}
