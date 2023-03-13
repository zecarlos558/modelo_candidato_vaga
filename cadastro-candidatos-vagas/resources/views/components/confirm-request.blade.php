@if (session('msg_alert'))
<div class="alerta text-uppercase" >
    <strong>{{ session('msg_alert') }}</strong>
    <span class="closebtn" onclick="closebtn();">&times;</span>
    <button style="display: none;" class="btn closebtn" id="closebtn" onclick="closebtn();">&times;</button>
</div>
<script>
    var n = 3;
    intervalo = window.setInterval(function(){
    n--;
    if (n == 0) {
        var btn = document.getElementById('closebtn');
        btn.click();
        btn.click();
        clearInterval(intervalo);
    }
    },1000);
    function closebtn() {
        var close = document.getElementsByClassName("closebtn");
        var i;
        for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
        }
    }
</script>
@endif
