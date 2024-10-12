<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionTable extends Migration
{
    public function up()
    {
        Schema::create('description', function (Blueprint $table) {
            $table->string('DescCode', 50)->primary();
            $table->string('DescType', 50);
            $table->string('DescDesc');
            $table->integer('SortCode');
            $table->string('GroupCode', 50);
            $table->string('TransType', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('description');
    }
}

