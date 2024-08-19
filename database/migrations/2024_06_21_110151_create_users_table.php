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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userId'); //primary key
            $table->string('name',50);
            $table->text('address');
            $table->date('dob');
            $table->boolean('status')->default(1)->comment('1:active,0:Inactive');
            $table->timestamps(); //created_at , updated_at
        });
    }

    /**
     * 
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
