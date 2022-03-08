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
        //

        Schema::create('jobMessages', function (Blueprint $table) {
            $table->id();
            $table->string('jobId')->nullable();
            $table->string('messageFrom')->nullable();
            $table->string('messageFromName')->nullable();
            $table->string('messageFromPhone')->nullable();
            $table->string('messageFromLang')->nullable();
            $table->string('messageTo')->nullable();
            $table->string('messageSubject')->nullable();
            $table->string('messageSubjectUA')->nullable();
            $table->string('messageAttach')->nullable();
            $table->string('messageText')->nullable();
            $table->string('messageTextUA')->nullable();
            $table->string('messageStatus')->nullable();
            $table->string('employerTagOK')->nullable();
            $table->string('employerTagKO')->nullable();
            $table->string('employerTagAlert')->nullable();
            $table->string('employerTagBookmark')->nullable();
            $table->string('ip')->nullable();
            $table->rememberToken();
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
        //
    }
};
