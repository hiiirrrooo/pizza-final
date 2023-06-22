<!doctype html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Running Orders</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/135e9c29ad.js" crossorigin="anonymous"></script>
</head>

<body class = "bg-light">

    <!-- navbar -->

    <nav class="navbar text-bg-primary">

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
    <div class="container-md mt-2">
        <div>
            <form action="/admin/orders">
                    <button class="btn btn-primary"><strong>Return to Orders</strong></button>
                </form>
                <h1>Running Orders</h1>
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                <table class="table table-light table-striped">
                    <thead class="table-primary fs-5 border border-dark">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Pizza Name</th>
                            <th scope="col">Order Date</th>
                            <!-- <th scope="col">Cancellation</th>
                            <th scope="col">Pickup Time</th> -->
                            <th scope="col" colspan=2>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fs-5 border border-dark">
                    @foreach($running as $run)


                    <tr>
                        <th scope="row">{{$run['order_id']}}</th>
                        <td>{{$run['customer_name']}}</td>
                        <td>{{$run['pizza_name']}}</td>
                        <td>{{$run['order_date']}}</td>
                        <!-- <td>{{$run['cancellation']}}</td>
                        <td>{{$run['pickup_time']}}</td> -->
                        <td>
                            <form action="/admin/orders/running/done/{{$run->order_id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Done</button>
                            </form>
                        </td>
                        <td>
                            <form action="/admin/orders/running/cancel/{{$run->order_id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cancel</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
      
</body>
</html>