<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('truck_number');
            $table->string('type');
            $table->decimal('capacity', 8, 2);
            $table->boolean('availability')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
