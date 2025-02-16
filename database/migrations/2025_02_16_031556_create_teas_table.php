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
        Schema::create('teas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tea_type_id')->nullable()->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('vendor')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('weight_grams');
            $table->integer('year')->nullable();

            $table->string('production_batch')->nullable();
            $table->string('packaging_type')->nullable();

            $table->string('region_of_origin')->nullable();
            $table->text('tasting_notes')->nullable();
            $table->string('aging_potential')->nullable();
            $table->integer('recommended_brewing_temp_celsius')->nullable();
            $table->integer('recommended_steeping_time_seconds')->nullable();
            $table->integer('recommended_grams_per_100ml')->nullable();

            $table->date('production_date')->nullable();
            $table->date('purchase_date')->nullable();
            $table->text('storage_notes')->nullable();

            $table->integer('rating')->nullable();
            $table->text('personal_notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teas');
    }
};
