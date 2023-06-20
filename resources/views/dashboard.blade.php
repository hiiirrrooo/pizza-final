<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/135e9c29ad.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

    <!-- navbar -->

    <nav class="navbar text-bg-primary fixed-top">

        <div class="container-fluid d-flex">
            <div class="d-flex">
                <a class="navbar-toggler" id="sidebar" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample"
                    role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" id="sidebar"></span>
                </a>
                <div class="navbar-brand text-light ms-2"><strong>Pizza Runner</strong></div>
            </div>
            <div class="d-flex ">
                <form action="/">
                    <button type="submit" class="btn btn-primary"><strong>Sign Out</strong>
                        </button>
                </form>
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

    <!-- main -->
    <div class="container px-4 text-center">
        <h1 class="mb-5 mt-2"><strong>Welcome Admin!</strong></h1>
        
        <div class="row d-flex justify-content-center gx-5">
            <div class = "col-3" >
                <form style = "height: 200px;" class = "d-flex justify-content-center text-bg-primary" action='/admin/orders'>
                    <button style="border: none; background-color: white; "  class="d-flex flex-column align-items-center text-bg-primary p-3">
                        <div style="font-size: 75px;" class = "mt-3"><i class="fa-solid fa-cart-shopping"></i></div>
                        <div class="mt-2">ORDERS</div>
    
                    </button>
                  
                </form>
            </div>

            <div class="col-3">
                <form style = "height: 200px;" class = "d-flex justify-content-center  text-bg-primary" action='/admin/reports'>
                    <button style="border: none; background-color: white;" class="d-flex flex-column align-items-center text-bg-primary p-3">

                        <div style="font-size: 75px;" class = "mt-3"><i class="fa-solid fa-clipboard"></i></div>
                        <div class="mt-2">REPORTS</div>

                    </button>
                </form>
            </div>

            <div class="col-3">
            <form style = "height: 200px;" class = "d-flex justify-content-center  text-bg-primary" action='/admin/orderhistory'>
                <button style="border: none; background-color: white;" class="d-flex flex-column align-items-center text-bg-primary p-3">
                        <div style="font-size: 75px;" class = "mt-3"><i class="fa-solid fa-database"></i></div>
                        <!-- insert xml dir -->
                        <div class="mt-2">FULL ORDER HISTORY</div>
                        
                </button>
            </form>
            </div>
        </div>
    </div>

</body>

</html>