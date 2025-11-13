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
        Schema::create('softwaresale_', function (Blueprint $table) {
        $table->id();
            $table->integer('sno')->unique();
            $table->string('partyname');
            $table->string('mobileno', 15)->nullable();
            $table->date('saledate')->nullable();
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
        Schema::dropIfExists('softwaresale_');
    }
};
