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
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('count');
            $table->longText('description');
            $table->timestamps();

            // Foreign Keys
            $table->unsignedInteger('category_id');
            // Trường tham chiếu
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    // Xóa bên này thì bên kia cũng bị xóa
                    ->onDelete('cascade');
                    // Trường hợp xóa bên này thì bên kia không bị xóa
                    // ->onDelete('set null');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
