<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('type', ['Manga', 'Bande dessinée']);
            $table->text('description')->nullable();
            $table->string('author')->nullable();
            $table->boolean('availability')->default(1);
            $table->enum('state', ['Neuf', 'Excellent', 'Très bon', 'Bon', 'Acceptable', 'Usé'])->nullable();
            $table->float('price', 10, 2)->default(0);
            $table->text('tags')->nullable();
            $table->string('picture_src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
