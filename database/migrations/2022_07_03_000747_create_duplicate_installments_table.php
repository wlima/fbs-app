<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuplicateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duplicate_installments', function (Blueprint $table) {
            $table->id();
            $table->integer('installmentNumber')->default(1);
            $table->boolean('paidOut')->default(false);
            $table->date('dueDate');
            $table->decimal('installtimentAmount');
            $table->decimal('amountPaid');
            $table->foreignId('duplicate_id')->constrained('duplicates');
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
        Schema::dropIfExists('duplicate_installments');
    }
}
