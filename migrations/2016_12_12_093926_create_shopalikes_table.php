<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopalikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopalike_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('category_id')->nullable();
            $table->string('linkable_type')->nullable();
            $table->integer('linkable_id')->nullable()->unsigned();
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
        Schema::dropIfExists('shopalikes');
    }
}
