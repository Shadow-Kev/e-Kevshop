<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('shops', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nom');
$table->string('telephone');
$table->string('email');
$table->string('adresse');
$table->string('logo');
$table->double('benefice');
$table->text('description');
$table->string('slug');

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
        Schema::drop('shops');
    }

}
