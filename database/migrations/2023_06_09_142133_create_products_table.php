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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
						$table->string("name");
						$table->integer("price");
						$table->boolean("avaliable");
						$table->text("description");
						$table->string('image');
						$table->string('banner');
						$table->unsignedBigInteger('companyID');
						$table->foreign('companyID')
							->references('id')
							->on('companies');
						$table->unsignedBigInteger('categoryID');
						$table->foreign('categoryID')
							->references('id')
							->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
