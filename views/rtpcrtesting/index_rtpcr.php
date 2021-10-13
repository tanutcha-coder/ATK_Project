<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1 class="mt-5">RT-PCR Testing<span><a href="?controller=quataiondetail&action=newrtpcr" class="btn btn-Success">Add+</a><br></span></h1>

        <br>

        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <form method="get" action="" class="d-flex">
                    <input class="form-control me-2" type="text" name="key" placeholder="Search" aria-label="Search">
                    <input type="hidden" name="controller" value="quataion" />
                    <button class="btn btn-outline-Light" type="submit" name="action" value="search">
                        Search
                    </button>
                </form>
            </div>
        </nav>
        <table id="QTtable" class="table table-bordered table-striped">

            <thead>

                <th>RT-PCR TestingID</th>
                <th>ATK TestingID</th>
                <th>LabroomID</th>
                <th>ผลตรวจ ATK</th>
                <th>ผลตรวจ RT-PCR</th>
                <th>เจ้าหน้าที่ส่งสารคัดหลั่ง</th>
                <th>เจ้าหน้าที่ตรวจ</th>
                <th>วันเวลาที่ตรวจ</th>
                <th>Edit</th>
                <th>Delete</th>
                

            </thead>
            <tbody>
                <?php


                foreach ($rtpcr_list as $q) {

                ?>
                    <tr>
                        <td><?php echo $q->rtpcrtesting_ID ?></td>
                        <td><?php echo $q->TestingID ?></td>
                        <td><?php echo $q->labroom_ID ?></td>
                        <td><?php echo $q->result ?></td>
                        <td><?php echo $q->rtpcr_result ?></td>
                        <td><?php echo $q->officer_N ?></td>
                        <td><?php echo $q->labanalyst_Name ?></td>
                        <td><?php echo $q->rtpcr_datetime ?></td>
                       

                        <td><a href="?controller=quataion&action=update_quatation&No=<?php echo $q->rtpcrtesting_ID ?>" class="btn btn-primary">Edit</td>
                        <td><a href="?controller=quataion&action=delete_quatation&No=<?php echo $q->rtpcrtesting_ID ?>" class="btn btn-danger">Delete</td>
                    </tr>
                <?php

                }
                ?>

            </tbody>

        </table>
        <a href="?controller=quataion&action=newrtpcr" class="w-100 btn btn-success btn-lg ">Add new quotation</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Database Management sec 701 Group 1 Part4</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Computer Engineering</p>
</footer>