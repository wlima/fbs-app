<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuplicatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duplicates', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('numberInstallments')->default(1);
            $table->date('purchaseDate');
            $table->date('dateFirstPaid');
            $table->foreignId('creditor_id')->constrained('creditors');
            $table->foreignId('category_id')->constrained('categories');
            $table->boolean('paidOff')->default(false);
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('duplicates');
    }
}
