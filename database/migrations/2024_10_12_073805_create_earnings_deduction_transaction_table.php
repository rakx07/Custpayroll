<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarningsDeductionTransactionTable extends Migration
{
    public function up()
    {
        Schema::create('earnings_deduction_transaction', function (Blueprint $table) {
            $table->string('EmployeeID', 50);
            $table->integer('PeriodNo');
            $table->integer('Quincena');
            $table->string('DescCode', 50);
            $table->decimal('Amount', 10, 2);
            $table->date('TransDate');
            $table->boolean('IsEdited');
            $table->decimal('AmountEmployer', 10, 2);
            $table->string('Unit', 50);
            $table->decimal('AmountTaxable', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('earnings_deduction_transaction');
    }
}

