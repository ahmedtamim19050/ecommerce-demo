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
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('phone');
            $table->timestamp('dob');
            $table->string('tax_no');
            $table->string('card_no');
            $table->string('govt_id_back');
            $table->string('govt_id_front');
            $table->string('bank_ac');
            $table->string('address');
            $table->string('ac_holder_name');
            $table->string('rtn');
            $table->string('paypal');
            $table->tinyInteger('ismonthly_charge')->default(0);
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
        Schema::dropIfExists('verifications');
    }
};
