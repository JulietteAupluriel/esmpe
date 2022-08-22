<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('intro_fr');
            $table->text('intro_nl')->nullable();
            $table->text('aboutintro_fr')->nullable();
            $table->text('about_fr')->nullable();
            $table->text('aboutintro_nl')->nullable();
            $table->text('about_nl')->nullable();
            $table->text('legals_nl')->nullable();
            $table->text('legals_fr')->nullable();
            $table->text('formintro_fr')->nullable();
            $table->text('formintro_nl')->nullable();
            $table->text('hideprog');
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
        Schema::dropIfExists('generals');
    }
}
