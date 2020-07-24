<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('livraisons', function(Blueprint $table) {
                $table->increments('id');
                $table->date('date');
$table->integer('commande');
$table->integer('mode_livraison');
$table->string('livre_par');
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
        Schema::drop('livraisons');
    }

}
