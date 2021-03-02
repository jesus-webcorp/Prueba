<?php 
    $total = 5000;
    $actual = rand(1, $total); //1234
    $porcentaje = round(($actual/$total) * 100, 1);
?>

<style>
    .inner{
        height: 25px;
        width: <?php echo $porcentaje ?>%;
        border-right: solid 1px #000;
        background-color: red;
    }
</style>

<div> 
    <div class="inner">
        <?php echo $porcentaje; ?>%
    </div>
</div>