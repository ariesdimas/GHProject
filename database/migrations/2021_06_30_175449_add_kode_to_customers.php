<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKodeToCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
            $table->string('kode');
            $table->string('alamat2');
            $table->string('fax');
            $table->string('kota');
            $table->string('negara');
            $table->integer('limitnominal');
            $table->integer('limitnota');
            $table->string('proteksi');
            $table->string('carapembayaran');
            $table->string('transportpengiriman');
            $table->string('carapengiriman');
            $table->string('area');
            $table->string('sales');
            $table->string('provinsi');
            $table->string('tglbergabung');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
}
