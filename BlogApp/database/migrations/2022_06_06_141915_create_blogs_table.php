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
    /*
        table des blog 
        title: nvarchar
        content: nvarchar
        categorie: nvarchar

        price: integer = integer

        navarchr = string 


    */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table -> string('title');
            $table -> string('content');
            $table -> string('categorie');
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
        Schema::dropIfExists('blogs');
    }
};
