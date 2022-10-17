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
            $table->string('foto')->nullable();//banner produknya
            $table->string('name');
            $table->double('price', 12,2)->default(0);
            $table->text('description');
            $table->string('unit');
            $table->string('priode');
            $table->string('meets');
            $table->string('meets_duration');
            $table->string('meets_duration_unit');
            $table->string('group_skill');
            $table->unsignedBigInteger("works_types_id");
            $table->foreign("works_types_id")->references("id")
                ->on("works_types");
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
