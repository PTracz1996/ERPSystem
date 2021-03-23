<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientsMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //private string $table_name = "clients";
    public function up()
    {
        Schema::create("clients", function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name',50); //or name and surname
            $table->string('email',50)->unique();
            $table->string('phone_number', 15)->unique();
            $table->string('street', 30);
            $table->string('city', 30);
            $table->string('post_code',7);
            $table->string('house_number', 7);
            $table->string('apartment_number', 7);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table_name);
    }
}
