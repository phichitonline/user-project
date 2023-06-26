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
            $table->string('username');
            $table->string('password');
            $table->string('ecid')->comment('เลขบัตรประชาชน encode');
            $table->string('ofid')->nullable()->comment('รหัสพนักงาน');
            $table->string('lineid')->comment('ไลน์ไอดี');
            $table->string('email')->nullable()->comment('อีเมล์');
            $table->string('tel')->comment('เบอร์โทรศัพท์');
            $table->string('isadmin', 1)->comment('ระดับผู้ใช้งาน');
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
