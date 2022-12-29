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
           $table->bigIncrements('id');
          $table->unsignedBigInteger('expert_id');
          $table->decimal('amount', 10, 2)->default(0);
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
