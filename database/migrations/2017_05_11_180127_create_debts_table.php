<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create tbl_due_listing
        Schema::create('tbl_due_listing_1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('profile_id');
            $table->integer('transaction_id');
            $table->string('transaction_amount');
            $table->dateTime('transaction_date');
            $table->integer('transaction_days');
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
        // Drop table due listing
        Schema::dropIfExists('tbl_due_listing');
    }
}
