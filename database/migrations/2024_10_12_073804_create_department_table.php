<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentTable extends Migration
{
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->string('DeptCode', 50)->primary();
            $table->string('Description');
            $table->string('AcctNo', 50);
            $table->string('OrgCode', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('department');
    }
}

