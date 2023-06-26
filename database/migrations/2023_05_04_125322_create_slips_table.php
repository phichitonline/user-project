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
        Schema::create('slips', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('dp')->comment('รหัสหน่วยงาน');
            $table->string('ofid')->comment('รหัสพนักงาน');
            $table->string('cd')->comment('รหัสรายรับรายจ่าย');
            $table->string('qty')->nullable()->comment('จำนวน');
            $table->double('income', 20, 2)->nullable()->comment('รายรับ');
            $table->double('expense', 20, 2)->nullable()->comment('รายการหัก');
            $table->dateTime('datetran')->comment('วันเวลาที่ทำรายการ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slips');
    }
};
