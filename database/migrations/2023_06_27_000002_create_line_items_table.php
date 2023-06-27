<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('line_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('quantity');
            $table->text('description');
            $table->unsignedBigInteger('bid_id');
            $table->string('category');
//            $table->string('unit');
            $table->integer('unit_price_excl_vat')->nullable();
            $table->integer('discount_excl_vat')->nullable();
            $table->integer('sub_total_excl_vat')->nullable();
            $table->decimal('vat_percentage')->nullable();
            $table->integer('sub_total_incl_vat')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_items');
    }
};
