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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table-> String('name');
            $table-> String('address');
            $table-> String('contact');
            $table-> String('email');
            $table-> String('logo')->nullable();
            $table-> String('twitter')->nullable();
            $table-> String('facebook')->nullable();
            $table-> String('instagram')->nullable();
            $table-> String('skype')->nullable();
            $table-> String('linkedin')->nullable();
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
        Schema::dropIfExists('schools');
    }
};
