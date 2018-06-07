<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name')->comment('客户姓名');
            $table->enum('sex', [1, 2])->comment('性别 1：男;2：女');
            $table->char('tel','20')->comment('电话');
            $table->enum('address', [1, 2])->comment('住址 1：绵竹;2：彭州');
            $table->enum('group',[1,2])->comment('客户属性 1：A客户;2：B客户');
            $table->timestamps();
            $table->unique('tel');
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
}
