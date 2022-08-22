<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title_fr');
            $table->string('title_nl');
            $table->text('body_fr')->nullable();
            $table->text('body_nl')->nullable();
            $table->date('date')->nullable();
            $table->string('schedule_fr')->nullable();
            $table->string('schedule_nl')->nullable();
            $table->text('venue_fr')->nullable();
            $table->text('venue_nl')->nullable();
            $table->string('speaker_fr')->nullable();
            $table->string('speaker_nl')->nullable();
            $table->string('website')->nullable();
            $table->unsignedInteger('places')->default(20);
            $table->unsignedInteger('filter')->nullable();
            $table->index(['date', 'filter']);
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
        Schema::dropIfExists('events');
    }
}
