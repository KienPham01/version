
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../deleteCustomer.js"></script>

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">MCoffee</h1>
            <div class="list-group">
                <a href="index.php?task=themsinhvien" class="list-group-item">Them Sinh Vien</a>
                <a href="index.php?task=xemdanhsach" class="list-group-item">danh sach sinh vien</a>
            </div>

        </div>

        <form method="POST" action="index.php?task=Search"> 
        <div class="col-lg-9">
          <div class="row pt-5">
              <div class="col-md-8">
                <h3>List Customer</h3>
                  <input type="text-center" name="search">
                  <input type="submit" name="" value="Search">
                  <table class="table-striped w-100">
                      <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>District</th>
                          <th>Province</th>
                          <th>Delete</th>
                      </tr>
                      <?php while($row = $result->fetch_assoc()){ ?>
                      <tr>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['phonenumber'] ?></td>
                          <td><?php echo $row['emailaddress'] ?></td>
                          <td><?php echo $row['district'] ?></td>
                          <td><?php echo $row['province'] ?></td>
<!--                           <td> <button value="index.php?task=Delete" onclick="deleteCustomer(this)"> Delete</button></td>
 -->
                         <td><a href="index.php?task=Delete&<?= $row['name']?>" class="button">delete</a></td>>

                      </tr>
                      <?php }; ?>

                  </table>

                          <td><button value="index.php?task=Delete" onclick="deleteCustomer(this)"> Delete</button></td>



              </div>
              <div class="col-md-4"> right collumn 4</div>
          </div>

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
