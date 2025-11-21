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
        Schema::create('allat', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->integer("ertekid")->references("id")->on("ertek")->onDelete("cascade");
            $table->integer("ev");
            $table->integer("katid")->references("id")->on("kategoria")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allat');
    }
};
