<?php
session_start();
include "../php/autoload.php";
if (!isset($_SESSION['admin'])){
    header("location:login.php");
}
if (isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $config->query("DELETE FROM `answers` WHERE `id_question`='$delete'");
    $config->query("DELETE FROM `questions` WHERE id='$delete'");
    header("location:view_question.php?scc");
}
$title = "View Question";
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
                        <?php if (isset($_GET['old'])){ ?><div class="alert alert-success">Please Delete Child</div> <?php } ?>
                        <?php if (isset($_GET['scc'])){ ?><div class="alert alert-success">Success</div> <?php } ?>
                        <div class="adv-table">
                            <table class="display table table-bordered table-striped" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Question</th>
                                    <th>Option</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select = $config->query("select * from questions");
                                while ($data = mysqli_fetch_array($select)){
                                    $id = $data['id'];
                                ?>
                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $data['question'] ?></td>
                                    <td>
                                        <table>
                                            <tbody>
                                            <?php
                                            $select2 = $config->query("select * from answers where id_question='$id'");
                                            while ($data2 = mysqli_fetch_array($select2)){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= !empty($data2['answer'])? $data2['code_answer'].'. '.$data2['answer']:'' ?> 
                                                    <?php if (!empty($data2['images'])){ ?> <img style="width: 80px"
                                                            src="../uploads/<?= $data2['images'] ?>" alt=""> <?php } ?></td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="text-uppercase"><?= $data['answer'] ?></td>
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
