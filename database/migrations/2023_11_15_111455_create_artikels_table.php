<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{

    public function up(): void
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('author');
            $table->string('kategori');
            // $table->string('jurusan');
            $table->text('description');
            $table->text('img');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};