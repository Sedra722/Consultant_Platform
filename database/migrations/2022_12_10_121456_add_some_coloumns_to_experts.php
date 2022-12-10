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
        Schema::table('experts', function (Blueprint $table) {
            $table->string('profile_image')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('workspace_name')->nullable();
            $table->integer('years_of_experience')->nullable();
            $table->json('category')->nullable();
            $table->mediumText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experts', function (Blueprint $table) {
            $table->dropColumn(['profile_image',
                                'phone',
                                'address',
                                'workspace_name',
                                'years_of_experience',
                                'category',
                                'description']);

                                });
    }
};
