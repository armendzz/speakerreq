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
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first-name');
            $table->string('last-name');
            $table->string('organization');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('fax');
            $table->string('email');
            $table->string('chapter');
            $table->string('chapter-state');
            $table->string('chapter-city');
            $table->string('chapter-region');
            $table->string('event-type');
            $table->string('event-theme');
            $table->string('event-location');
            $table->date('date');
            $table->string('event-start-time');
            $table->string('event-end-time');
            $table->string('expectedattendes');
            $table->text('description-attendes');
            $table->string('colors-attire');
            $table->boolean('non-aka');
            $table->string('special-guests');
            $table->string('role-of-president');
            $table->string('log-lodging-facility');
            $table->string('log-address');
            $table->string('log-zip');
            $table->string('log-city');
            $table->string('log-state');
            $table->string('log-phone');
            $table->boolean('log-wifi');
            $table->string('log-access-code');
            $table->string('request-type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speakers');
    }
};
