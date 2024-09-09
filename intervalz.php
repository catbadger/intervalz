<!--
    /**
        intervalz.php by JR Richet
        https://github.com/catbadger/intervalz
    **/
-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="jquery.js"></script>
<script src="intervalz.js?v=<?php echo time();?>"></script>
<link href="intervalz.css?v=<?php echo time();?>" rel="stylesheet">

<div id="container">
    <p style="padding:6px;">
        This is my interval training framework. It is designed for tabata style HIIT workouts. </br>
        The coded defaul is to go hard for 60 seconds.  Rest for 20. 10 Sets.
    </p>
    <h2 id="directions">
        Click Play to Start
    </h2>
    <table id='uxtable'>
        <tr>
            <td colspan="3" id="counter"></td>
        </tr>
        <tr>
            <td id="elapsed"></td>
        </tr>
        <tr>
            <td id="intervals" class="left">
                <div>Intervals</div>
                <div>
                    <span id="intervals_num">0</span>/<span id="intervals_tot">0</span>
                </div>
            </td>
            <td id="gap"></td>
            <td id="elapsed" class="right">
                <div>Elapsed</div>
                <div>
                    <span id="elapsed_num">00:00</span>/<span id="elapsed_tot">00:00</span>
                </div>

            </td>
        </tr>
        <tr style="border-top:2px solid #fff;">
            <td id="resetbtn" class="button" title="reset"><i class="material-icons">loop</i></td>
            <td id="current"></td>
            <td id="playbtn" class="button right" title="play/pause"><i class="material-icons">play_circle_outline</i></td>
        </tr>
    </table>
    <td>
        <div id="historybox"></div>
    </td>
</div>