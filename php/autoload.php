<?php
if (!isset($_SESSION)){
    session_start();
}
require_once "Config.php";
require_once "Login.php";
require_once "Question.php";
$config   = new Config();
$config->con();
$login    = new Login();
$question = new Question();
if (isset($_POST['start_question'])){
    $req   = $_POST;
    $age   = $req['age'];
    $_SESSION['step1']=$age;
    header("location:../instructions.php");
}elseif (isset($_POST['signin_admin'])){
    $login->admin($_POST);
}elseif (isset($_POST['add_question'])){
    $question_add = $question->add_question($_POST);
    if ($question_add==true){
        $_SESSION['alert1']="Success";
        header("location:../admin/add_question.php");
    }else{
        $_SESSION['alert1']="Something Problem";
        header("location:../admin/add_question.php");
    }
}elseif (isset($_POST['add_question_option'])){
    $add_q = $question->add($_POST,$_FILES);
    if ($add_q==true){
        $_SESSION['alert1']="Success";
        header("location:../admin/add_question.php");
    }else{
        $_SESSION['alert1']="Something Problem";
        header("location:../admin/add_question.php");
    }
}elseif (isset($_GET['stat_quiz'])){
    $_SESSION['step2']=$_SESSION['step1'];
    unset($_SESSION['step1']);
    header("location:../questions.php");
}elseif (isset($_GET['timeout'])){
    $_SESSION['step3']=$_SESSION['step2'];
    unset($_SESSION['step2']);
    header("location:../test-is-over.php");
}elseif (isset($_GET['completed'])){
    unset($_SESSION['step3']);
    session_destroy();
    header("location:../index.php");
}elseif (isset($_GET['completed2'])){
    $user_age = $_SESSION['step3'];
    $user_datas = $_SESSION['question'];
    $correct = 0;
    foreach ($user_datas as $user_data=>$usr_data){
        $user_ans = $usr_data['option_num'];
        $question_id = $usr_data['question_id'];
        $correct_ans_data = mysqli_fetch_array($config->query("SELECT `answer` FROM `questions` WHERE id='$question_id'"));
        $correct_ans = $correct_ans_data['answer'];
        if ($user_ans==$correct_ans){
            ++$correct;
        }
    }
    $insert = $config->query("INSERT INTO `results`(`age`, `iq_score`) VALUES ('$user_age','$correct')");
    $last_usr_data = mysqli_fetch_array($config->query("SELECT `id` FROM `results` WHERE 1 order by id desc"));
    $last_user = $last_usr_data['id'];
    $_SESSION['step4']=$last_user;
    unset($_SESSION['step3']);
    header("location:../get-result.php");
}elseif (isset($_POST['auth'])){
    if ($_POST['auth']=='questions_ajax'){
        $add = $question->QuestionPhpFun($_POST);
    }
    if ($_POST['auth']=='payment_completed' && isset($_POST['email'])){
        $user_qid = $_SESSION['step4'];
        $choose = mysqli_fetch_array($config->query("SELECT * FROM `results` WHERE id='$user_qid'"));
        $user_age = $choose['age'];
        $iq_score = $choose['iq_score'];
        $email = $_POST['email'];
        $score = ($user_age/$iq_score)*100;
        $insert = $config->query("INSERT INTO `people`(`age`, `mail`, `pay`, `score`) VALUES ('$user_age','$email','true','$score')");
        if ($insert==true){
            $_SESSION['step5']=$email;
            unset($_SESSION['step4']);
            echo 200;
        }else{
            echo "Something Problem";
        }
    }
}elseif (isset($_GET['paid_success']) && isset($_SESSION['step5'])){
    $usr_email = $_SESSION['step5'];
    $select = mysqli_fetch_array($config->query("SELECT * FROM `people` WHERE `mail`='$usr_email' order by id desc"));
    $_SESSION['score_check']=$select['id'];
    header("location:../your-score.php");
}elseif (isset($_POST['clearSession'])){
    unset($_SESSION['step1']);
    unset($_SESSION['step2']);
    unset($_SESSION['step3']);
    unset($_SESSION['step4']);
    unset($_SESSION['step5']);
    session_destroy();
    echo 200;
}elseif (isset($_POST['timeStart'])){
    $_SESSION['time']=$_POST['timeStart'];
    $expl = explode(":",$_POST['timeStart']);
    var_dump($expl);
}