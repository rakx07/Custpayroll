<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayCodeTable extends Migration
{
    public function up()
    {
        Schema::create('day_code', function (Blueprint $table) {
            $table->string('DayCode', 50)->primary();
            $table->string('Description');
            $table->decimal('fF8H', 10, 2);
            $table->decimal('fX8H', 10, 2);
            $table->decimal('fFNP', 10, 2);
            $table->decimal('fXNP', 10, 2);
            $table->boolean('IsHoliday');
        });
    }

    public function down()
    {
        Schema::dropIfExists('day_code');
    }
}

