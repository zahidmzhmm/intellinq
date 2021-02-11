<?php


class Question
{
    public function add_question($data)
    {
        $config = new Config();
        $answer = $data['answer'];
        $question = $data['question'];
        $query  = $config->query("INSERT INTO `questions`(`question`, `answer`) VALUES ('$question','$answer')");
        if ($query==true){
            return true;
        }else{
            return false;
        }
    }
    public function add($data, $file)
    {
        $config = new Config();
        $id_question = $data['question'];
        $questions = $data['questions'];
        $code_answer = ['a', 'b', 'c', 'd'];
        if (!empty($questions[0])){
            $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `answer`) VALUES ('$code_answer[0]','$id_question','$questions[0]')");
            if (!empty($questions[1])){
                $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `answer`) VALUES ('$code_answer[1]','$id_question','$questions[1]')");
                if (!empty($questions[2])){
                    $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `answer`) VALUES ('$code_answer[2]','$id_question','$questions[2]')");
                    if (!empty($questions[3])){
                        $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `answer`) VALUES ('$code_answer[3]','$id_question','$questions[3]')");
                    }
                }
            }
            return true;
        }
//        if (!empty($file['img']['name'][0])){
//            $img1 = $this->image_controller($file['img'],0,"../uploads");
//            $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `images`) VALUES ('$code_answer[0]','$id_question','$img1')");
//            if (!empty($file['img']['name'][1])){
//                $img2 = $this->image_controller($file['img'],1,"../uploads");
//                $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `images`) VALUES ('$code_answer[1]','$id_question','$img2')");
//                if (!empty($file['img']['name'][2])){
//                    $img3 = $this->image_controller($file['img'],2,"../uploads");
//                    $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `images`) VALUES ('$code_answer[2]','$id_question','$img3')");
//                    if (!empty($file['img']['name'][3])){
//                        $img4 = $this->image_controller($file['img'],3,"../uploads");
//                        $config->query("INSERT INTO `answers`(`code_answer`, `id_question`, `images`) VALUES ('$code_answer[3]','$id_question','$img4')");
//                    }
//                }
//            }
//            return true;
//        }
        return false;
    }
    public function edit($data, $file)
    {
        $config = new Config();
        $old_options = $data['old_option_id'];
        $questions = $data['questions'];
        $id_question = $data['question'];
        $code_answer = ['a', 'b', 'c', 'd'];
        if (!empty($questions[0]) && !empty($old_options[0])){
            $config->query("UPDATE `answers` SET `code_answer`='$code_answer[0]',`id_question`='$id_question',`answer`='$questions[0]' WHERE id='$old_options[0]'");
            if (!empty($questions[1]) && !empty($old_options[1])){
                $config->query("UPDATE `answers` SET `code_answer`='$code_answer[1]',`id_question`='$id_question',`answer`='$questions[1]' WHERE id='$old_options[1]'");
                if (!empty($questions[2]) && !empty($old_options[2])){
                    $config->query("UPDATE `answers` SET `code_answer`='$code_answer[2]',`id_question`='$id_question',`answer`='$questions[2]' WHERE id='$old_options[2]'");
                    if (!empty($questions[3]) && !empty($old_options[3])){
                        $config->query("UPDATE `answers` SET `code_answer`='$code_answer[3]',`id_question`='$id_question',`answer`='$questions[3]' WHERE id='$old_options[3]'");
                    }
                }
            }
            return true;
        }
        return false;
    }

    public function image_controller($file, $num, $location)
    {
        $filename = $file['name'][$num];
        $fileex   = explode('.',$filename);
        $fileextention = end($fileex);
        $fname    = rand(10000000001,999999999999).'.'.$fileextention;
        $locate   = $location.'/'.$fname;
        $filetmp  = $file['tmp_name'][$num];
        move_uploaded_file($filetmp,$locate);
        return $fname;
    }

    public function QuestionPhpFun($data)
    {
        if (isset($_SESSION['question'])){
            $item_array_id = array_column($_SESSION['question'],'question_id');
            $checking = in_array($data['question_id'],$item_array_id);
            if (empty($checking)){
                $count = count($_SESSION['question']);
                $_SESSION['question'][$count] = $data;
                return true;
            }else{
                foreach ($_SESSION['question'] as $keys=>$values){
                    $main_pid = $_SESSION['question'][$keys]['question_id'];
                    if (!empty($data['answer_id'])){
                        if ($main_pid==$data['question_id']){
                            $_SESSION['question'][$keys]["answer_id"]=$data['answer_id'];
                            echo "Success";
                        }
                    }
                }
            }
        }else {
            $_SESSION['question'][0] = $data;
            return true;
        }
    }
}