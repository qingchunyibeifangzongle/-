<meta charset="utf-8">
<meta http-equiv="Refresh" content ="<?php echo $wait;?> ;url=<?php echo $url;?>"/>
<link href="assets/css/general.css" rel="stylesheet" type="text/css" />
<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
<div class="list-div">
    <div style="background:#FFF; padding: 20px 50px; margin: 2px;">
        <table align="center" width="400">
            <tr>
                <td width="50" valign="top">
                    <!--  <img src="images/information.gif" width="32" height="32" border="0" alt="information" /> -->
                    <?php if ($status == 1): ?>
                    <img src="assets/css/images/yes.jpg" width="32" height="32" border="0" alt="warning" />
                    <?php else: ?>
                    <img src="assets/css/images/warning.gif" width="32" height="32" border="0" alt="warning" />
                <?php endif ?>
                <!--   <img src="images/confirm.gif" width="32" height="32" border="0" alt="confirm" /> -->
                </td>
                <td style="font-size: 14px; font-weight: bold"><?php echo $message;?></td>
            </tr>
            <tr>
                <td></td>
                <td id="redirectionMsg">
                    <span id='second'><?php echo $wait;?></span>
                    秒之后跳转
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <ul style="margin:0; padding:0 10px" class="msg-link">
                        <li><a href=""></a></li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</div>
<script>
    var second = document.getElementById('second').innerHTML;
    setInterval(function(){
        second -= 1;
        document.getElementById('second').innerHTML = second;
    },1000)
</script>