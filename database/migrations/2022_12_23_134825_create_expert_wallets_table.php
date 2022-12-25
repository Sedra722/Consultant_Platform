<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_wallets', function (Blueprint $table) {
          $table->unsignedBigInteger('expert_id');
          $table->enum('type', ['credit', 'debit']);
          $table->decimal('amount', 10, 2)->default(0);
          $table->string('description')->nullable();
          $table->tinyInteger('status')->default(0)
                ->comment('0=PENDING | 1=APPROVED | 2=REJECTED ');
          $table->foreign('expert_id')
                ->references('id')
                ->on('experts');
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
        Schema::dropIfExists('expert_wallets');
    }
};
