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
      // if (!Schema::hasTable('characters')) { // check if the table exists in db; if it does, skip the migration to avoid error
        Schema::create('characters', function (Blueprint $table) {
          $table->id();
          $table->timestamps();
          $table->string('name');
          $table->integer('rarity');
          $table->string('element');
          $table->string('weapon_class');
          $table->text('description');
        });
      // }
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            //
        });
    }
};
