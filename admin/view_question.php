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
                    <?php if (isset($_SESSION['alert1'])){ ?><div class="alert alert-warning"><?= $_SESSION['alert1'] ?></div> <?php unset($_SESSION['alert1']); } ?>
                    <?php
                    if (isset($_GET['edit'])){
                        $id = $_GET['edit'];
                        $select3 = $config->query("select * from questions where id='$id'");
                        $checking = mysqli_num_rows($select3);
                        if (!$checking==1){
                            echo "<script>window.location.href='view_question.php?not_found'</script>";
                        }
                        $data3 = mysqli_fetch_array($select3);
                        ?>
                        <form enctype="multipart/form-data" action="../php/autoload.php" method="post" class="card-body">
                            <div class="row mx-0">
                                <label for="question" class="col-lg-2 mt-2 control-label">Question Name</label>
                                <div class="col-lg-10">
                                    <select name="question" class="form-control" id="question">
                                        <option value="">Choose</option>
                                        <?php
                                        $query4 = $config->query("select * from questions order by id desc ");
                                        while ($data4 = mysqli_fetch_array($query4)){
                                            ?>
                                            <option <?= $id==$data4['id']?'selected':'' ?> value="<?= $data4['id'] ?>"><?= $data4['question'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="old_question_id" value="<?= $id ?>">
                            <br>
                            <?php
                            $select4 = $config->query("select * from answers where id_question='$id'");
                            while ($data6 = mysqli_fetch_array($select4)){
                                ?>
                                <input type="hidden" name="old_option_id[]" value="<?= $data6['id'] ?>">
                                <div class="row mx-0">
                                    <label for="qa" class="col-lg-2 control-label">Question A</label>
                                    <div class="col-lg-10">
                                        <textarea id="qa" name="questions[]" class="summernote" cols="30" rows="10"><?= $data6['answer'] ?></textarea>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="mx-3 my-4"><button type="submit" name="edit_question_option" class="btn f13 btn-danger">Submit</button></div>
                        </form>
                    <?php }else{ ?>
                        <header class="card-header">
                            All Questions <a href="add_question.php" class="btn ml-3 btn-success btn-sm">Add new</a>
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
                                            <td>
                                                <a class="btn btn-danger btn-sm my-1" href="?delete=<?= $data['id'] ?>"><i class="fa fa-trash-o text-light"></i></a>
                                                <a class="btn btn-warning my-1 btn-sm" href="?edit=<?= $data['id'] ?>"><i class="fa fa-pencil text-light"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </section>
</section>
<?php
require_once "includes/footer.php";
?>
