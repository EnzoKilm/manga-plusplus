<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('periodicity', ['Mois', 'Année']);
            $table->bigInteger('free_count')->nullable();
            $table->boolean('customizable')->default(0);
            $table->float('discount', 8, 2)->nullable()->default(0);
            $table->enum('discount_type', ['€', '%'])->nullable();
            $table->float('price', 10, 2)->default(0);
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
        Schema::dropIfExists('subscriptions');
    }
}
