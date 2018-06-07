<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Requests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('api_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('api_id');
            $table->string('IP_Address');
            $table->string('headers');
            $table->string('method');
            $table->string('url_content');
            $table->string('query_params');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
<<<<<<< HEAD
    }
=======
}
>>>>>>> c77b64f7c3782e04ac76ddfc1516d46960e1ed0b
    public function down()
    {
        //Schema::drop('requets');
    }
}
