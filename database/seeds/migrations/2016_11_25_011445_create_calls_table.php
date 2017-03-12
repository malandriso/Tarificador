<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function($table) {
            $table->increments('id');
            $table->string('time');
            $table->string('duration');
            $table->string('cond_code');
            $table->string('code_dial');
            $table->string('code_used');
            $table->string('dialed_num');
            $table->string('calling_num');
            $table->string('clg_num_in_tac');
            $table->string('auth_code');
            $table->string('frl');
            $table->string('ixc_code');
            $table->string('in_crt_id');
            $table->string('out_crt_id');
            $table->string('feat_flag');
            $table->string('line_feed');
            $table->string('date');
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
        Schema::drop('calls');
    }
}