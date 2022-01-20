<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titols', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('synthesis')->nullable();
            $table->foreignId('autor_id');
            $table->string('genre')->nullable();
            $table->string('language')->nullable();
            $table->date('edition_year')->nullable();
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
        Schema::dropIfExists('titols');
    }
}
