<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('promotions', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('produit');
                $table->integer('categorie');
                $table->double('vieux_prix');
                $table->double('prix');
                $table->date('date_debut');
                $table->date('date_fin');
                $table->double('pourcentage');
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
        Schema::drop('promotions');
    }

}
