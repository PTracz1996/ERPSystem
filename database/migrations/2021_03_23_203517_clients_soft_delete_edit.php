<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientsSoftDeleteEdit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //private string $table_name = "clients";
    public function up()
    {
        Schema::table("clients", function (Blueprint $table) {
            $table->string('nip', 13)->nullable();
            $table->boolean('is_delete')->default(false);
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
            $table->dropColumn('nip');
            $table->dropColumn('is_delete');
        });
    }
}
