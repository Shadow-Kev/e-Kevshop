<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('commandes', function(Blueprint $table) {
                $table->increments('id');
                $table->date('date');
$table->integer('user');
$table->integer('mode_paiement');
$table->integer('mode_livraison');
$table->integer('statut');
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
        Schema::drop('commandes');
    }

}
