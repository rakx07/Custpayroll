<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpCostDistributionTransTable extends Migration
{
    public function up()
    {
        Schema::create('emp_cost_distribution_trans', function (Blueprint $table) {
            $table->integer('PeriodNo');
            $table->integer('Quincena');
            $table->string('EmployeeID', 50);
            $table->string('DeptCode', 50);
            $table->decimal('AmtDirect', 10, 2);
            $table->decimal('AmtIndirect', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('emp_cost_distribution_trans');
    }
}

