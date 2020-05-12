<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePhoneNumbers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone', 45);
            $table->unsignedBigInteger('client_id')
                ->nullable();

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->cascadeOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_numbers');
    }
}
