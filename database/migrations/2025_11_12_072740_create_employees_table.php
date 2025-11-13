<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
        
            $table->id()->autoIncrement();
    $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
                  
            $table->string('Emp_name');

            $table->bigInteger('month')->default(0)->nullable();
            $table->string('designation');
            $table->decimal('basic_salary', 10, 2)->default(0);
            $table->decimal('petrol_allowance', 10, 2)->default(0);
            $table->decimal('sale_incentive', 10, 2)->default(0);
            $table->decimal('amc_incentive', 10, 2)->default(0);
            $table->decimal('bonus', 10, 2)->default(0);
            $table->decimal('full_day_amt_deduction', 10, 2)->default(0);
            $table->decimal('halfday_amt_deduction', 10, 2)->default(0);
            $table->integer('leave_days')->default(0);
            $table->integer('half_days')->default(0);
            $table->text('leave_dates')->nullable(); // can store comma-separated or JSON dates
            $table->text('remark')->nullable();
            
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary');
    }
};
