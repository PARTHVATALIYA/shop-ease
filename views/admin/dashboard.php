<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <link rel="stylesheet" href="./../../public/assets/css/navbar.css">
        <link rel="stylesheet" href="./../../public/assets/css/sidebar.css">
        <link rel="stylesheet" href="./../../public/assets/css/dashboard.css">
        <title>Document</title>
    </head>
    <body>
        <?php
        require_once './../../middleware/checkUserLogin.php';

        if (loginSuccessfully('admin')) {
            require_once './layout/navbar.php';
            require_once './layout/sidebar.php';
        ?>
            <section class="container-fluid productTable">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>discount (in %)</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Action</th>
                        <!-- <th></th> -->
                    </thead>
                    <tbody class="products">
                        
                    </tbody>
                    <div>
                        <span class="text-danger" id="error"></span>
                    </div>
                </table>
            </section>
        <?php
        } else {
            header("location: ./../auth/signin.php");
            exit;
        }
        ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://kit.fontawesome.com/830d1515a6.js" crossorigin="anonymous"></script>
    <script src="./../../public/assets/js/sidebar.js"></script>
    <script src="./../../public/assets/js/dashboard.js"></script>
</html>