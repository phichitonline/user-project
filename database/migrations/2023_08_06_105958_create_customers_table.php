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
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('ofid')->comment('รหัสพนักงาน');
            $table->string('tname')->comment('ชื่อ-สกุล');
            $table->string('addr1')->nullable()->comment('ที่อยู่1');
            $table->string('addr2')->nullable()->comment('ที่อยู่2');
            $table->string('tel')->nullable()->comment('เบอร์โทรศัพท์');
            $table->string('depart')->nullable()->comment('หน่วยงาน');
            $table->string('description')->nullable()->comment('ตำแหน่ง');
            $table->string('cid')->comment('เลขบัตรประชาชน encode');
            $table->string('banknumber')->comment('เลขที่บัญชีธนาคาร');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
