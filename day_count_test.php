<?php

function count_days_since($origin)
{
    $now = time();
    $your_date = strtotime($origin);
    $date_diff = $now - $your_date;

    return round(($date_diff / (60 * 60 * 24 * 7)));
}
    