<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products'))
        {
            Schema::create('products', function (Blueprint $table)
            {
                $table->increments('id');
                $table->string('name');
                $table->text('description');
                $table->timestamps();
            });

            if (!Schema::hasTable('user_product'))
            {
                Schema::create('user_product', function (Blueprint $table)
                {
                    $table->primary(['user_id', 'product_id']);

                    // when dealing with a auto increment field of the primary key
                    // always use unsigned()
                    $table->integer('user_id')->unsigned()->index();
                    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

                    $table->integer('product_id')->unsigned()->index();
                    $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

                    $table->timestamps();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('user_product');
    }
}
