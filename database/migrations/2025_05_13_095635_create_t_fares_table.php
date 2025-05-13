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
        Schema::create('t_fares', function (Blueprint $table) {
            $table->id();
            $table->string('vcMNEMONIC', 30);
            $table->unsignedInteger('inZONE_ID');
            $table->unsignedTinyInteger('inSERVICE_TYPE');
            $table->unsignedTinyInteger('inDIRECTION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fares');
    }
};
