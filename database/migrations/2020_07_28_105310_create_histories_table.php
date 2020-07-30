<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('teams_id')->unsigned();
            $table->foreign('teams_id')->references('id')->on('teams')->onDelete('cascade');
            $table->bigInteger('helpers_id')->unsigned();
            $table->foreign('helpers_id')->references('id')->on('helpers')->onDelete('cascade');
            $table->bigInteger('needs_id')->unsigned();
            $table->foreign('needs_id')->references('id')->on('needs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
