<?php

echo"
<div id='modal' class='modal-overlay' onclick='overlaymodalOffClick(event)'>
    <div class='modal-window'>
        <div class='title'>
            <h4 id='title'></h4>
        </div>
        <div class='close-area' id='close-area' onclick='modalOffClick()'>X</div>
        <div class='modcontent' id='modcontent'></div>
    </div>
</div>
";

?>