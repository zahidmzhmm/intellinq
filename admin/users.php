<?php
session_start();
include "../php/autoload.php";
if (!isset($_SESSION['admin'])){
    header("location:login.php");
}
if (isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $config->query("DELETE FROM `people` WHERE id='$delete'");
    header("location:users.php?scc");
}
$title = "All Users";
require_once "includes/header.php";
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-sm-12">
                <section class="card">
                    <header class="card-header">
                        All Questions
                    </header>
                    <div class="card-body">
                        <?php if (isset($_GET['scc'])){ ?><div class="alert alert-success">Success</div> <?php } ?>
                        <div class="adv-table">
                            <table class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                    <th>Time</th>
                                    <th>Payment</th>
                                    <th>Score</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select = $config->query("SELECT * FROM `people`");
                                while ($data = mysqli_fetch_array($select)){
                                    $id = $data['id'];
                                    ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $data['age'] ?></td>
                                        <td><?= $data['mail'] ?></td>
                                        <td><?= $data['created_date'] ?></td>
                                        <td><?= $data['pay'] ?></td>
                                        <td><?= $data['score'] ?></td>
                                        <td><a href="?delete=<?= $data['id'] ?>"><i class="fa fa-trash-o text-danger"></i></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php
require_once "includes/footer.php";
?>
