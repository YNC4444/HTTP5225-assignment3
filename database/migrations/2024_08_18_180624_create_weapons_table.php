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
      // one to one relationship between weapons and characters

      // if (!Schema::hasTable('characters')) { // check if the table exists in db; if it does, skip the migration to avoid error
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('rarity');
            $table->string('class');
            $table->decimal('base_atk', 4, 1);
            $table->string('2nd_stat');
            $table->decimal('2nd_stat_value_%', 4, 2);
            $table->string('description');
            $table->foreignId('character_id')->constrained()->onDelete('cascade'); 
        });
      // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
