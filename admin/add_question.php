<?php
session_start();
include "../php/autoload.php";
if (!isset($_SESSION['admin'])){
    header("location:login.php");
}
$title = "Add Question";
require_once "includes/header.php";
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        Add Question
                    </header>
                    <form action="../php/autoload.php" method="post" class="card-body">
                        <?php if (isset($_SESSION['alert1'])){ ?><div class="alert alert-warning"><?= $_SESSION['alert1'] ?></div> <?php unset($_SESSION['alert1']); } ?>
                        <div class="row my-2 mx-0">
                            <label for="question" class="col-lg-2 mt-2 control-label">Question Name</label>
                            <div class="col-lg-10">
                                <input type="text" required id="question" name="question" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="row my-2 mx-0">
                            <label for="answer" class="col-lg-2 mt-2 control-label">Answer</label>
                            <div class="col-lg-10">
                                <select name="answer" required class="form-control" id="answer">
                                    <option value="">Select</option>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="mx-3"><button name="add_question" type="submit" class="btn btn-warning f13">Add Question</button></div>
                    </form>
                    <header class="card-header">
                        Add Options
                    </header>
                    <form enctype="multipart/form-data" action="../php/autoload.php" method="post" class="card-body">
                        <?php if (isset($_SESSION['alert2'])){ ?><div class="alert alert-warning"><?= $_SESSION['alert2'] ?></div> <?php unset($_SESSION['alert2']); } ?>
                        <div class="row mx-0">
                            <label for="question" class="col-lg-2 mt-2 control-label">Question Name</label>
                            <div class="col-lg-10">
                                <select name="question" class="form-control" id="question">
                                    <option value="">Choose</option>
                                    <?php
                                    $query = $config->query("select * from questions order by id desc ");
                                    while ($data = mysqli_fetch_array($query)){
                                        ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['question'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="stepy-tab pt-4">
                            <ul id="default-titles" class="stepy-titles clearfix">
                                <li id="default-title-0" class="current-step">
                                    <div>Simple</div>
                                </li>
                                <li id="default-title-1" class="">
                                    <div>Image</div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-horizontal" id="default">
                            <fieldset title="Simple" class="step" id="default-step-0">
                                <legend> </legend>
                                <div class="row mx-0">
                                    <label for="qa" class="col-lg-2 mt-2 control-label">Question A</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="qa" name="questions[]" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row mx-0 my-2">
                                    <label for="qb" class="col-lg-2 mt-2 control-label">Question B</label>
                                    <div class="col-lg-10">
                                        <input id="qb" type="text" name="questions[]" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row mx-0 my-2">
                                    <label for="qc" class="col-lg-2 mt-2 control-label">Question C</label>
                                    <div class="col-lg-10">
                                        <input id="qc" type="text" name="questions[]" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row mx-0 my-2">
                                    <label for="qd" class="col-lg-2 mt-2 control-label">Question D</label>
                                    <div class="col-lg-10">
                                        <input id="qd" type="text" name="questions[]" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset title="Image" class="step" id="default-step-1" >
                                <legend> </legend>
                                <div class="row mx-0 my-2">
                                    <label class="col-lg-2 mt-2 control-label">IMG A</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="img[]" class="form-control" placeholder="IMG 1">
                                    </div>
                                </div>
                                <div class="row mx-0 my-2">
                                    <label class="col-lg-2 mt-2 control-label">IMG B</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="img[]" class="form-control" placeholder="IMG 1">
                                    </div>
                                </div>
                                <div class="row mx-0 my-2">
                                    <label class="col-lg-2 mt-2 control-label">IMG C</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="img[]" class="form-control" placeholder="IMG 3">
                                    </div>
                                </div>
                                <div class="row mx-0 my-2">
                                    <label class="col-lg-2 mt-2 control-label">IMG D</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="img[]" class="form-control" placeholder="IMG 4">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="mx-3 my-4"><button type="submit" name="add_question_option" class="btn f13 btn-danger">Submit</button></div>
                            <input type="button" class="finish d-none btn btn-danger" value="Finish"/>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </section>
</section>
<?php
require_once "includes/footer.php";
?>

