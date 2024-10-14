<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationTable extends Migration
{
    public function up()
    {
        // Check if the configuration table exists
        if (!Schema::hasTable('configuration')) {
            Schema::create('configuration', function (Blueprint $table) {
                $table->id();
                $table->string('SSSGeneration');
                $table->string('PHGeneration');
                $table->string('HDMFGeneration');
                $table->string('PayRetentionChoice');
                $table->decimal('ToRetainPercent', 10, 2);
                $table->decimal('ToRetainFixedAmount', 10, 2);
                $table->integer('LateMinsAllowance');
                $table->integer('UndertimeMinsAllowance');
                $table->integer('DuplicateLogInMinsAllowance');
                $table->integer('DuplicateLogOutMinsAllowance');
                $table->boolean('LogTwice');
                $table->decimal('NoOfWorkHours', 5, 2);
                $table->time('DefaultTimeIn');
                $table->time('DefaultTimeOut');
                $table->time('DefaultTimeInPM');
                $table->time('DefaultTimeOutPM');
                $table->string('OvertimePassword');
                $table->time('NPStart');
                $table->time('NPEnd');
                $table->boolean('IsMonthlyIncludeInDTR');
                $table->boolean('EnableMultipleDept');
                $table->timestamps();
            });
        }
    

    }
    
}
