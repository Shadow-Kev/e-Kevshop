<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('roles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',100,null);
            $table->string('description',100)->nullable();
            $table->string('slug')->nullable();
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
        Schema::drop('roles');
    }

}
