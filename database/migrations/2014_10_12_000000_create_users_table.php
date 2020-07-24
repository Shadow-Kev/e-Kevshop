<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nom', 100);
            $table->string('prenom', 100)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password');
             $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();

            $table->boolean('statut');
            $table->integer('role');
            $table->string('slug')->nullable();
            $table->string('confirm_token')->nullable();
            $table->string('reset_token')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
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
