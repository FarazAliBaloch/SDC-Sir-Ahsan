<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

  public function up(): void{Schema::create('course', function (Blueprint $table) {$table->id();$table->string('title')->unique();$table->integer('credit_hrs');$table->timestamps();}); }


  public function down(): void{Schema::dropIfExists('course');}
};