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
        \DB::statement("
        CREATE VIEW running_orders AS SELECT r.order_id, cust.customer_name, p.pizza_name, c.order_date, r.cancellation, r.pickup_time
        FROM runner_orders r, customer_orders c, customer cust, pizza_names p
        WHERE r.order_id = c.order_id AND c.customer_id = cust.customer_id AND c.pizza_id = p.pizza_id 
        AND r.pickup_time IS NULL AND r.cancellation IS NULL;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('running_orders');
    }
};
