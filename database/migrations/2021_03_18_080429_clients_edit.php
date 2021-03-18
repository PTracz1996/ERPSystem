<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientsEdit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private string $table_name = "clients";
    public function up()
    {
        Schema::table($this->table_name, function (Blueprint $table) {
            $table->string('apartment_number', 7)->nullable()->change(); //admin can edit this filed
            $table->string('street', 30)->nullable()->change(); //admin can edit this filed
            $table->string('phone_number', 15)->unieque()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table_name, function (Blueprint $table) {
            $table->string('apartment_number', 7)->nullable(false)->change(); //admin can edit this filed
            $table->string('street', 30)->nullable(false)->change(); //admin can edit this filed
            $table->string('phone_number', 15)->unieque(false)->nullable()->change();
        });
    }
}
