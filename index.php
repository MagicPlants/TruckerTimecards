
<center>
<h1>Payroll Management</h1>
<body style="background-color:#414141;color:#c0c0c0;">
<div class="container">

    <div id="div_login">
        <h2>Login</h2>
        <div id="message"></div>
     <div>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" onkeydown="if (event.keyCode == 13) document.getElementById('but_submit').click()"/>
        </div>
        <div>
            <input type="button" value="Submit" name="but_submit" id="but_submit" style="display:none;"/>
        </div>
    </div>

</div>
</center>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
    $("#but_submit").click(function(){
        var username = "root"
        var password = $("#txt_pwd").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
                url:'checkUser.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "home.php";
                    }else{
                        msg = "Invalid Password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});
</script>
<script>
$(document).on("keypress",".keypressbutton",function(event) {
    var keyCode = event.which || event.keyCode;
    if (keyCode == 13) {
        $("#but_submit").submit();
        return false;
    }
});
</script>