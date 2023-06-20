<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Succesful Orders</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/135e9c29ad.js" crossorigin="anonymous"></script>
    <style>
        #return {
            margin-top: 70px!important
        }
        </style>

</head>

<body class = "bg-light">

    <!-- navbar -->

    <nav class="navbar text-bg-primary fixed-top">

        <div class="container-fluid">
            <div class="d-flex">
                <a class="navbar-toggler" id="sidebar" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" id="sidebar"></span>
                </a>
                <div class="navbar-brand text-light ms-2"><strong>Pizza Runner</strong></div>
            </div>

        </div>


        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasExampleLabel">Pizza Runner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="">
                    <ul style="list-style-type: none;" class="fs-4">
                        <li class="mb-3">
                            <form action='/admin/dashboard'>
                                <button style="border:none; background-color: white;" class="d-flex">
                                    <div class="me-3"><i class="fa-solid fa-table-columns  fs-3"></i></div>
                                    <div>Dashboard</div>
                                </button>
                            </form>
                        </li>
                        <li class="mb-3">
                            <form action= '/admin/orders'>
                                <button style="border:none; background-color: white;" class="d-flex">
                                    <div class><i class="fa-solid fa-cart-shopping me-3 fs-4"></i></div>
                                    <div>Orders</div>
                                </button>
                            </form>
                        </li>
                        <li class="mb-3">
                            <form action='/admin/reports'>
                                <button style="border:none; background-color: white;" class="d-flex">
                                    <div class="me-3"><i class="fa-solid fa-clipboard fs-3"></i></div>
                                    <div>Reports</div>
                                </button>
                            </form>
                        </li>
                        <li class="mb-3">
                        <!-- insert xml dir -->
                            <form action='/admin/orderhistory'> 
                                <button style="border:none; background-color: white;" class="d-flex">
                                    <div class="me-3"><i class="fa-solid fa-database fs-3"></i></div>
                                    <div>Full Order History</div>
                                </button>
                            </form> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- table -->
    <div class="container-md mt-5 bg-light">
        <div>
            <form action="/admin/orders" id="return">
                <button class="btn btn-primary"><strong>Return to Orders</strong></button>
            </form>
            <h1>Full Order History</h1>
            <table class="table table-light table-striped border border-pirmary">
                    <thead class="table-primary border border-dark fs-5 ">
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Cancellation</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Runner ID</th>
                        <th scope="col">Runner Name</th>
                        <th scope="col">Pizza ID</th>
                        <th scope="col">Pizza Name</th>
                    </thead> 
                <tbody class="fs-5 border border-dark">
                <?php
                foreach ($xml->children() as $row) {
                $order_id = $row->order_id;
                $order_date = $row->order_date;
                $cancellation = $row->cancellation;
                $customer_id = $row->customer_id;
                $customer_name = $row->customer_name;
                $customer_address = $row->customer_address;
                $runner_id = $row->runner_id;
                $runner_name = $row->runner_name;
                $pizza_id = $row->pizza_id;
                $pizza_name = $row->pizza_name;
                
                echo "<tr><th class = 'text-center text-dark' scope='row'>" . $order_id . "</th>
                    <td>" . $order_date . "</td>    
                    <td>" . $cancellation . "</td>
                    <td>" . $customer_id . "</td>
                    <td>" . $customer_name . "</td>
                    <td>" . $customer_address . "</td>
                    <td>" . $runner_id . "</td>
                    <td>" . $runner_name . "</td>
                    <td>" . $pizza_id . "</td>
                    <td>" . $pizza_name . "</td>
                </tr>";
                } ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>