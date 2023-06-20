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
    <div class="container-md mt-2 bg-light">
        <div>
            <form action="/admin/orders">
                <button class="btn btn-primary"><strong>Return to Orders</strong></button>
            </form>
            <h1>Succesful Orders</h1>

            <table class="table table-light table-striped border border-pirmary">
                <thead class="table-primary border border-dark fs-5 ">
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Runner ID</th>
                        <th scope="col">Runner Name</th>
                        <th scope="col">Order DT</th>
                        <th scope="col">Pickup DT</th>
                        <th scope="col">Distance</th>
                        <th scope="col">Duration</th>

                    </tr>
                </thead>
                <tbody class="fs-5 border border-dark">
                @foreach($successful as $success)
                <tr>
                    <th class = "text-center text-dark" scope="row">{{$success['OrderID']}}</th>
                    <td>{{$success['CustID']}}</td>
                    <td>{{$success['CustName']}}</td>
                    <td>{{$success['RunnerID']}}</td>
                    <td>{{$success['RunnerName']}}</td>
                    <td>{{$success['OrderDT']}}</td>
                    <td>{{$success['PickupDT']}}</td>
                    <td>{{$success['distance']}}</td>
                    <td>{{$success['duration']}}</td>
                </tr>
                @endforeach
                    </tr>
                </tbody>
            </table>
            <span class>{{$successful->links()}}</span> 
        </div>
    </div>

    <style>
       
        .w-5 {
            display: none;
            
        }
       a{
        border:none;
       }
        .leading-5{
            margin-top: 30px;
        }

        nav[role="navigation"]{
           color:red 

        }

        div[value="Previous"]{
            
        }
    </style>
</body>
</html>