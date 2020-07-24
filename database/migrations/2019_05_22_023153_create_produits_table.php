<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('produits', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nom');
$table->double('prix');
$table->integer('quantite');
$table->integer('shop');
$table->integer('marque');
$table->integer('categorie');
$table->integer('garantie');
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
        Schema::drop('produits');
    }

}
