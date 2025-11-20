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
        Schema::create('productdetails', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('productname',255);
            $table->string('productcompany',255);
            $table->string('productuse',255)->nullable();
            $table->integer('MRP')->nullable();
            $table->integer('saleprice')->nullable();
            $table->integer('minsaleprice')->nullable();
            $table->integer('customerprice')->nullable();
            $table->integer('dealerprice')->nullable(); 
            $table->string('discription',255)->nullable();  
            $table->string('usertype',255)->nullable();
            $table->string('arc',255)->nullable(); 
            $table->string('t1',255)->nullable();
            $table->string('t2',255)->nullable();
            $table->string('t3',255)->nullable();
            $table->string('t4',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productdetail');
    }
};
