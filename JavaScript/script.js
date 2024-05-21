var sec = 10;
function redirect(){
    setInterval(function(){
        if(sec==0){
        location.href="index.php";
    }
    else{
        document.getElementById("time").innerHTML = --sec; }
    }, 1000);
}