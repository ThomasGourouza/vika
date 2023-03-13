<?php include_once './data/models/period.model.php' ?>
<?php include_once './data/period.data.php' ?>
<link rel="stylesheet" href="website/pages/welcome/welcome.css">

<h1>
    <?php echo translate('title') ?>
</h1>
<div class="container">
    <?php
    if (count($periods) > 0) {
        foreach ($periods as $period) {
            echo '<div class="period-block">
                <div class="period-title">' . localizeDate($period->begin) . ' - ' . localizeDate($period->end) . ' (' . $period->getTime() . ') | ' . $period->title . '</div>
                <div class="period-info">' . $period->place . '</div>
                <div class="period-description">' . $period->description . '</div>
            </div>';
        }
    }
    ?>
</div>

<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>d</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>
<p>x</p>