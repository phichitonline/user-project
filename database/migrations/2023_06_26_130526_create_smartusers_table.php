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
        Schema::create('smartusers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->id();
            $table->string('username', 100)->comment('ชื่อผู้ใช้ (เลขบัตรประชาชน encode)');
            $table->string('password')->comment('รหัสผ่าน (วันเดือนปีเกิด)');
            $table->string('lineid')->comment('ไลน์ไอดี');
            $table->string('email')->nullable()->comment('อีเมล์');
            $table->string('tel')->nullable()->comment('เบอร์โทรศัพท์');
            $table->string('isadmin', 1)->nullable()->comment('ระดับผู้ใช้งาน');
            $table->string('consent', 1)->nullable()->comment('ความยินยอม');
            $table->string('pincode', 100)->nullable()->comment('รหัส Pin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smartusers');
    }
};
