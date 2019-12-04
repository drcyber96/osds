<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportscamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportscam', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('phone');
          $table->string('email');
          $table->string('bank_name');
          $table->string('bank_account');
          $table->string('platform');
          $table->string('product');
          $table->string('image')->nullable();
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
        Schema::dropIfExists('reportscam');
    }
}
