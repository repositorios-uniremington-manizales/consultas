<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {            
            $table->bigInteger('identification')->unique();
            $table->string('name', 150);
            $table->string('institutionalMail', 150)->unique();
            $table->string('medellinMail', 150)->unique();
            $table->string('medellinPassword', 20);
            $table->integer('credentialClaimAttempts');
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
        Schema::dropIfExists('credentials');
    }
}
