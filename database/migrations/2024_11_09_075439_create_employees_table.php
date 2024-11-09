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
          
                    $table->id();
                    $table->string('name', 80); // Name with a max length of 255 characters
                    $table->string('position', 100); // Position with a max length of 100 characters
                    $table->string('facebook', 60)->nullable(false); // Facebook link with a max length of 255 characters
                    $table->string('instagram', 60)->nullable(false); // Instagram link with a max length of 255 characters
                    $table->string('twitter', 60)->nullable(false); // Twitter link with a max length of 255 characters
                    $table->string('linkedin', 60)->nullable(false); // LinkedIn link with a max length of 255 characters
                    $table->tinyInteger('status')->default(0)->comment('1:Show,0:Hide');// 0 for hide, 1 for show
                    $table->string('image'); // Image path with a max length of 255 characters
                    $table->timestamps();
                });
            }
            
       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
