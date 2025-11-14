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
        Schema::create('amcssale', function (Blueprint $table) {
        $table->id()->autoIncrement();
          $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->integer('sno')->unique();
            $table->string('partyname');
            $table->string('mobileno', 15)->nullable();
            $table->date('amc_date')->nullable(); // changed from saledate to amc_date
            $table->string('softwarename');
            $table->string('software_remark')->nullable();
            $table->string('software_account')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amcssale');
    }
};
