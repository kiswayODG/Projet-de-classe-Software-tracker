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
        Schema::table('logiciel', function (Blueprint $table) {
            $table->unsignedBigInteger('soft_type_id')->nullable();
            $table->foreign('soft_type_id')->references('id')->on('types');
         });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
