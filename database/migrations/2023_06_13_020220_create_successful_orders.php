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
        CREATE VIEW successful_orders AS 
        SELECT DISTINCT c.order_id AS OrderID, c.customer_id AS CustID, cust.customer_name AS CustName, r.runner_id AS RunnerID, 
        run.runner_name AS RunnerName, c.order_date AS OrderDT, r.pickup_time AS PickupDT, r.distance, r.duration
        FROM customer_orders c, customer cust, runner_orders r, runners run
        WHERE c.order_id = r.order_id
        AND c.customer_id = cust.customer_id
        AND r.runner_id = run.runner_id
        AND r.cancellation IS NULL
        ORDER BY OrderID;
        
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('successful_orders');
    }
};
