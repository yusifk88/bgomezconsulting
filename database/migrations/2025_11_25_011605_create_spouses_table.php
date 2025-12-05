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
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string("name");
            $table->string("occupation");
            $table->string("address");
            $table->string("city");
            $table->string("street");
            $table->string("state");
            $table->string("zip");
            $table->string("phone");
            $table->string("email");
            $table->string("ssn");
            $table->string("license_number");
            $table->date("dob");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spouses');
    }
};
