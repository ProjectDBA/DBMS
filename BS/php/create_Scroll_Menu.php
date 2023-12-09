<?php

echo"
<div id='cont'>
    <button id='btn-modal' onclick=\"openmod('3_5mm.php')\">3.5mm</button>
    <button id='btn-modal' onclick=\"openmod('CurrentChipSet.php')\">CurrentChipSet</button>
    <button id='btn-modal' onclick=\"openmod('isQuad.php')\">isQuad</button>
    <button id='btn-modal' onclick=\"openmod('LessWeight.php')\">LessWeight</button>
    <button id='btn-modal' onclick=\"openmod('MoreBattery.php')\">MoreBattery</button>
</div>
<div id='modal' class='modal-overlay'>
    <div class='modal-window'>
        <div class='title'>
            <h3 id='title'></h3>
        </div>
        <div class='close-area' id='close-area'>X</div>
        <div class='modcontent' id='modcontent'></div>
    </div>
</div>
";

?>