<?php include("../inc/header.php"); ?>

<body>
<?php include("../inc/navbar.php"); ?>

    <section>
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger bg-light p-3 shadow-sm">Taks Management System</h5>
                    <a name="" id="" class="btn btn-primary btn-sm mb-5" href="index.php" role="button">Manage User</a>
                    <?php
                    if(isset($_GET['id'])){
                        $id= $_GET['id'];

                        $select="SELECT *FROM users WHERE id=$id";
                        $select_result = mysqli_query($con, $select);
                        // $data=mysqli_fetch_assoc($select_result);
                        $data=$select_result->fetch_assoc();

                    }
                  
                    ?>
                    <form class="row" action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 col-lg-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" readonly id="name" name="name" aria-describedby="emailHelp" value="<?php echo $data['name']; ?>">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" readonly id="phone" name="phone" value="<?php echo $data['phone']; ?>" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" readonly name="email" value="<?php echo $data['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("../inc/footer.php"); ?>