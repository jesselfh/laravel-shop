<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        字段名称         描述                   类型              加索引缘由
        id              自增长ID               unsigned int      主键
        user_id         该地址所属的用户        unsigned int       外键
        province        省                    varchar            无
        city            市                    varchar            无
        district        区                    varchar            无
        address         具体地址               varchar            无
        zip             邮编                  unsigned int       无
        contact_name    联系人姓名             varchar            无
        contact_phone   联系人电话             varchar            无
        last_used_at    最后一次使用时间        datetime null      无

        */
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('address');
            $table->unsignedInteger('zip');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->dateTime('last_used_at')->nullable();
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
        Schema::dropIfExists('user_addresses');
    }
}
