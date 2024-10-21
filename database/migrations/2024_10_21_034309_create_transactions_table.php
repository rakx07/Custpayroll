<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('Employee_id', 50); // Same type and length as Employee_id in employees table
            $table->decimal('salary', 15, 2);
            $table->integer('quincena'); // 1 for first quincena, 2 for second quincena
            $table->date('transaction_date');
            $table->foreign('Employee_id')->references('Employee_id')->on('employees')->onDelete('cascade'); // Foreign key reference
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};