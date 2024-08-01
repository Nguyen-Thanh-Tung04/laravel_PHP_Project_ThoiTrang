<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveProductPriceSaleColumnFromOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn('product_price_sale');
        });
    }

    public function down()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->string('product_price_sale'); // Nếu muốn rollback migration
        });
    }
}