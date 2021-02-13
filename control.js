function controller() {
    $(".loading_spin").css("display","block");
    let id = $(".active").data('id');
    if (id===''){
        let id = 0;
    }
    let option = $(".active").data('option');
    let question_num = $(".page").val();
    let pluslocation = parseInt(question_num)+1;
    $.post("php/autoload.php", { question_id: question_num, answer_id: id, option_num: option, auth: "questions_ajax" })
        .done(function( data ) {
            $(".contents").load("questionContent.php?q="+pluslocation);
        });
}
function back() {
    $(".loading_spin").css("display","block");
    let id = $(".active").data('id');
    let option = $(".active").data('option');
    let question_num = $(".page").val();
    let minlocation = parseInt(question_num)-1;
    $.post("php/autoload.php", { question_id: question_num, answer_id: id, option_num: option, auth: "questions_ajax" })
        .done(function( data ) {
            $(".contents").load("questionContent.php?q="+minlocation);
        });
}
function finish() {
    let id = $(".active").data('id');
    let option = $(".active").data('option');
    let question_num = $(".page").val();
    $.post("php/autoload.php", { question_id: question_num, answer_id: id, option_num: option, auth: "questions_ajax" })
        .done(function( data ) {
            window.location.href='php/autoload.php?timeout';
        });
}