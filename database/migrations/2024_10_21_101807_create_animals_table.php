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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column:'cell_id')->nullable();
            $table->index(columns:'cell_id', name:'animal_cell_idx');
            $table->foreign(columns:'cell_id', name:'animal_cell_fk')-> on (table: 'cells') -> references(columns: 'id') -> onDelete('cascade');
            $table->string(column: 'name');
            $table->unsignedInteger(column: 'age');
            $table->string(column: 'type');
            $table->text(column: 'description');
            $table->string(column: 'image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
