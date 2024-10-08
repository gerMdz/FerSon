<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('entrada_etiqueta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrada_id')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->foreignId('etiqueta_id')
                ->constrained()
                ->onDelete('cascade')
            ;
            $table->string('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entrada_etiquetas');
    }
};
