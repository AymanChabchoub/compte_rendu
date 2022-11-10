<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdinateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   schema::disableForeignKeyConstraints();
        Schema::create('ordinateurs', function (Blueprint $table) {
            $table->id();
            $table->String('Type');
            $table->String('Prix');
            $table->UnsignedBigInteger('codcl');
            $table->Foreign('codcl')->references('id')->on('clients');
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
        Schema::dropIfExists('ordinateurs');
    }
}
