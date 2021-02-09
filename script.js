function timeout() {
    const minute = Math.floor(timeLeft/60);
    const second = timeLeft%60;
    const mint   = checkTime(minute);
    const sect   = checkTime(second);
    const tm = setTimeout(function () {timeout()},1000);
    const dateObj = new Date();
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const month = monthNames[dateObj.getMonth()];
    const day = String(dateObj.getDate()+1).padStart(2, '0');
    const year = dateObj.getFullYear();
    const setCookie = day+' '+month+' '+year;
    if (timeLeft<=0)
    {
        clearTimeout(tm);
        window.location.href='php/autoload.php?timeout';
    }else{
        $.post("php/autoload.php", { timeStart: mint+":"+sect })
            .done(function( data ) {
                $(".time").load("time.php")
            });
    }
    timeLeft--;
}
function checkTime(msg) {
    if (msg<10){
        msg="0"+msg;
    }
    return msg;
}