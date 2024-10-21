<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpCostDistributionTable extends Migration
{
    public function up()
    {
        Schema::create('emp_cost_distribution', function (Blueprint $table) {
            $table->string('Employee_id', 50);
            $table->string('DeptCode', 50);
            $table->decimal('Percent', 5, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('emp_cost_distribution');
    }
}
