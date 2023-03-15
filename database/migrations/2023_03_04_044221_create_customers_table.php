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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->nullable()->default(null);
            $table->integer('loan_amount')->nullable()->default(null);
            $table->string('loan_purpose')->nullable()->default(null);
            $table->integer('tenor')->nullable()->default(null);
            $table->string('brand')->nullable()->default(null);
            $table->string('type')->nullable()->default(null); 
            $table->string('model')->nullable()->default(null);
            $table->string('year')->nullable()->default(null);
            $table->string('province')->nullable()->default(null);
            $table->string('acc_branch')->nullable()->default(null);
            $table->string('refferal_code')->nullable()->default(null);

            $table->string('customer_no')->nullable()->default(null);
            $table->string('occupation')->nullable()->default(null);
            $table->string('education')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('birth_date')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('contract_no')->nullable()->default(null);

            $table->string('pencairan')->nullable()->default(null);
            $table->string('angsuran')->nullable()->default(null);
            $table->string('paket')->nullable()->default(null);
            $table->string('otr')->nullable()->default(null);
            $table->string('dp_percent')->nullable()->default(null);
            $table->string('ar')->nullable()->default(null);
            $table->string('cash')->nullable()->default(null);
            $table->string('tjh_price')->nullable()->default(null);
            $table->string('acp')->nullable()->default(null);
            $table->string('efective_interest')->nullable()->default(null);
            $table->string('flat_interest')->nullable()->default(null);
            $table->string('tdp')->nullable()->default(null);
            $table->string('addm_addb')->nullable()->default(null);
            $table->string('dp')->nullable()->default(null);
            $table->string('insurance')->nullable()->default(null);
            $table->string('tlo')->nullable()->default(null);
            $table->string('credit')->nullable()->default(null);
            $table->string('atm_acp')->nullable()->default(null);

            $table->string('call_result_1')->nullable()->default(null);
            $table->string('call_result_2')->nullable()->default(null);
            $table->string('call_result_3')->nullable()->default(null);
            $table->string('call_result_4')->nullable()->default(null);
            $table->string('product')->nullable()->default(null);
            $table->string('notes')->nullable()->default(null);
            $table->boolean('blacklist')->nullable()->default(null);
            $table->string('caller')->nullable()->default(null);

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
        Schema::dropIfExists('customers');
    }
};
