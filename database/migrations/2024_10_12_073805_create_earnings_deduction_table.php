<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarningsDeductionTable extends Migration
{
    public function up()
    {
        Schema::create('earnings_deduction', function (Blueprint $table) {
            $table->integer('PeriodNo');
            $table->integer('Quincena');
            $table->string('EmployeeID', 50);
            $table->string('DescCode', 50);
            $table->decimal('TransAmount', 10, 2);
            $table->decimal('OriginalAmount', 10, 2);
            $table->decimal('Balance', 10, 2);
            $table->boolean('TimingFlag');
            $table->boolean('TaxFlag');
            $table->boolean('IsRecurring');
        });
    }

    public function down()
    {
        Schema::dropIfExists('earnings_deduction');
    }
}

