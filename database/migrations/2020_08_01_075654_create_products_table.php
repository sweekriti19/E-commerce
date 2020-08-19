<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('brand');
            $table->string('category');
            $table->string('status');
            $table->string('featured');
            $table->date('pf1');
            $table->date('pt1');
            $table->float('price');
            $table->float('sp');
            $table->date('pf2');
            $table->date('pt2');
            $table->string('img');
            $table->string('url');
//            $table->string('features');
//            $table->string('specification');
//            $table->string('tags');
//            $table->string('bdes');
//            $table->string('ddes');
            $table->string('keyword');
            $table->string('seodes');
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
        Schema::dropIfExists('products');
    }
}
