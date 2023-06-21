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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('kategori_blog_id')->unsigned();
            $table->foreign('kategori_blog_id')->references('id')->on('kategori_blogs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('slug');
            $table->string('img');
            $table->longText('text');
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
