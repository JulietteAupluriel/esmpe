<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
			$table->string('email')->nullable();
            $table->boolean('noemail')->default(0);
			$table->string('phone')->nullable();
			$table->string('commune')->nullable();
            $table->string('national')->nullable();
            $table->string('lang')->nullable();
            $table->foreignId('event_id');
            $table->index(['event_id', 'name']);
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
        Schema::dropIfExists('participants');
    }
}
