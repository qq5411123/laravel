<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {

            $table->id();

            $table->string('username', 32);

            $table->string('realname', 20)->nullable();

            $table->string('auth_key', 32);

            $table->string('password_hash', 255);

            $table->string('phone');

            $table->string('email', 255);

            $table->integer('partner_aid')->default(0)->nullable();

            $table->integer('director_aid')->default(0)->nullable();

            $table->integer('manager_aid')->default(0)->nullable();

            $table->tinyInteger('role_type');

            $table->integer('depart_id')->default(0)->nullable();

            $table->smallInteger('status')->default(10);

            $table->integer('task_nums')->default(0)->nullable();

            $table->integer('sub_account')->default(0)->nullable();

            $table->double('sales_money', 10,2)->default(0.00)->nullable();

            $table->double('received_money', 10,2)->default(0.00)->nullable();

            $table->dateTime('created_at')->nullable();

            $table->dateTime('updated_at')->nullable();

            $table->integer('add_uid')->default(0)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
