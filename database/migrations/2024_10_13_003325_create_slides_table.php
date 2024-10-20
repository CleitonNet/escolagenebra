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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('verticalImage')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('slideTarget')->nullable();
            $table->string('title1')->nullable();
            $table->string('colorTitle1')->default('#ffffff')->nullable();
            $table->string('shadowTitle1')->default(1)->nullable();
            $table->string('alignTitle1')->default('left')->nullable();
            $table->string('weightTitle1')->default('400')->nullable();
            $table->string('btnlabel1')->nullable();
            $table->string('btnaction1')->nullable();
            $table->string('newPage1')->nullable();
            $table->string('btnaction1Target')->nullable();
            $table->string('title2')->nullable();
            $table->string('colorTitle2')->default('#ffffff')->nullable();
            $table->string('shadowTitle2')->default(1)->nullable();
            $table->string('alignTitle2')->default('left')->nullable();
            $table->string('weightTitle2')->default('700')->nullable();
            $table->string('btnlabel2')->nullable();
            $table->string('btnaction2')->nullable();
            $table->string('newPage2')->nullable();
            $table->string('btnaction2Target')->nullable();
            $table->string('btnactionSlide')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
