<?php include_once './data/models/period.model.php' ?>
<?php include_once './data/period.data.php' ?>
<link rel="stylesheet" href="website/pages/welcome/welcome.css">

<h1>
    <?php echo translate('title') ?>
</h1>
<div class="container">
    <?php
    if (count($periods) > 0) {
        echo '<table class="table table-striped">
        <thead><tr class="period-title">
        <th>' . translate('id') . '</th>
        <th>' . translate('begin') . '</th>
        <th>' . translate('end') . '</th>
        <th>' . translate('time') . '</th>
        <th>' . translate('place') . '</th>
        <th>' . translate('period_title') . '</th>
        <th>' . translate('description') . '</th>
        </tr></thead>
        <tbody>';
        foreach ($periods as $period) {
            echo '<tr>
            <th class="period-info">' . $period->id . '</th>
            <td class="period-info">' . localizeDate($period->begin) . '</td>
            <td class="period-info">' . localizeDate($period->end) . '</td>
            <td class="period-info">' . $period->getTime() . '</td>
            <td class="period-info">' . $period->place . '</td>
            <td class="period-info">' . $period->title . '</td>
            <td class="period-description">' . $period->description . '</td>
            </tr>';
        }
        echo '</tbody>
        </table>';
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