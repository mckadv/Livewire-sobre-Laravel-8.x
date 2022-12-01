<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_products', function (Blueprint $table) {
            $table->id();
			$table->string('name'); 
			$table->string('description');
			$table->integer('quantity');
			$table->float('price');
			$table->text('user_id'); // user_id of our product author
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
        Schema::dropIfExists('crud_products');
    }
}
