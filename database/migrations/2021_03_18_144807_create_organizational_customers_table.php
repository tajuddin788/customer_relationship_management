<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationalCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizational_customers', function (Blueprint $table) {
            $table->string('organizationName');
            $table->string('organizationPhone');
            $table->string('ownerName');
            $table->string('liablePersonName');
            $table->string('liablePersonPhone');
            $table->integer('customerId')->unsigned()->nullable();
            $table->foreign('customerId')->references('customerId')->on('customers')->onDelete('cascade');

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
        Schema::dropIfExists('organizational_customers');
    }
}
