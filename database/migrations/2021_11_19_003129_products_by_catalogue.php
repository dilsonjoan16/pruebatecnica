<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsByCatalogue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_by_catalogue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_product')->unsigned();
            $table->bigInteger('id_catalogue')->unsigned();
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_catalogue')->references('id')->on('catalogues')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
}
