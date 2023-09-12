<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
	        $table->text('description');
	        $table->integer('price')->unsigned();
            $table->unsignedInteger('postalcode');
            $table->text('address');
            $table->text('operating_hours');
 	        $table->integer('category_id')->unsigned();// カテゴリを外部キーとして関連付ける
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
        Schema::dropIfExists('shops');
    }
};
