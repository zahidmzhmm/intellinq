<?php
include "php/autoload.php";
if (!isset ($_GET['q']) ) {
    $page = 1;
} else {
    $page = $_GET['q'];
}
$selectb = $config->query("select * from questions");
$total = mysqli_num_rows($config->query("select * from questions"));
$results_per_page = 1;
$page_first_result = ($page-1) * $results_per_page;
$number_of_page = ceil ($total / $results_per_page);
?>
<form action="php/autoload.php" method="post" class="main_contents questions_contents">
    <div class="q_number_time">
        <div class="q_number">
            <h4><?= $page ?>/<?= $total ?></h4>
        </div>
        <div class="time text-light">
            <?php if (isset($_SESSION['time'])){ include "time.php"; } ?>
        </div>
    </div>
    <?php
    $select = $config->query("select * from questions LIMIT "."$page_first_result".","."$results_per_page");
    while ($data = mysqli_fetch_array($select)){
        $id = $data['id'];
        if (isset($_SESSION['question'])){
            if (isset($_SESSION['question'][($page-1)]['answer_id'])){
                $answer_id = $_SESSION['question'][($page-1)]['answer_id'];
            }
        }
        $select2 = $config->query("select * from answers where id_question='$id'");
        ?>
        <input type="hidden" name="page" class="page" value="<?= $page ?>">
        <input type="hidden" class="question_num" value="<?= $data['id'] ?>" name="question_num">
        <div class="">
            <div class="question">
                <h4><?= $data['question'] ?></h4>
            </div>
            <div class="answers" data-toggle="buttons">
                <?php
                while ($data2 = mysqli_fetch_array($select2)){
                    ?>
                    <div class="single_answer btn btn-light <?php if (isset($answer_id)){ if ($answer_id==$data2['id']){ echo 'active3'; }else{ echo 'Error4'; } } ?> " data-qid="<?= $data2['id_question'] ?>" data-id="<?= $data2['id'] ?>" data-option="<?= $data2['code_answer'] ?>">
                        <input type="radio" name="options" autocomplete="off">
                        <h5><?= !empty($data2['answer'])?$data2['answer']:'' ?><?php if (!empty($data2['images'])){ ?> <img src="uploads/<?= $data2['images'] ?>" class="img-fluid" alt="" /> <?php } ?></h5>
                    </div>
                <?php } ?>
            </div>
            <div class="buttons_group">
                <?php if ($page>1){ ?>
                    <div class="single_button">
                        <button onclick="back()" class="btn" type="button">Previous</button>
                    </div>
                <?php } ?>
                <?php if ($page>1 && $total>$page){ ?>
                    <div class="single_button">
                        <button class="btn" onclick="window.location.href='php/autoload.php?completed'" type="button">Quit</button>
                    </div>
                <?php } ?>
                <?php if ($page==$total){ ?>
                    <div class="single_button">
                        <button onclick="finish()" class="btn" type="button">Finish</button>
                    </div>
                <?php }else{ ?>
                    <div class="single_button">
                        <button name="next_quiz" class="btn" type="button" onclick="controller()">Next</button>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
    }
    ?>
</form>
<script src="control.js"></script>