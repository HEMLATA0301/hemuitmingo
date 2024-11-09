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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name',70);
            $table->string('mobile',10);
            $table->string('email',70);
            $table->string('skill');
            $table->string('qualification');
            $table->string('resume',26);
            $table->tinyInteger('status')->default(0)->comment('0:Show,1:Hide');
            $table->string('ip',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
