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
    Schema::create('contact_people', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('slug')->nullable()->unique();
      $table->string('email')->unique();
      $table->string('phone')->unique();
      $table->unsignedBigInteger('job_position_id');
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('job_position_id')->references('id')->on('job_positions')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('contact_people');
  }
};
