<?php

namespace lesson_9;

class TimeHelper
{
    public function getNextWorkDay(int $time = null, string $format = 'd.m.Y'): string
    {
        $dateArray = getdate($time);
        if($dateArray["weekday"] == "Saturday" || $dateArray["weekday"] == "Sunday"){
            $nextWorkDay = getdate(strtotime("next Monday", $time));
        } else {
            $nextWorkDay = getdate(strtotime('next day', $time));
        }
        $strNextWorkDay = $nextWorkDay['mday'] .".".$nextWorkDay['mon'] .".".$nextWorkDay['year'];
        return $strNextWorkDay;
    }

    public function getDayByBirthday(int $day, int $month)
    {
        $now = time();
        $birthday = mktime(hour: 0, month: $month, day: $day);
        $dateDiffInSeconds = $birthday - $now;
        $diffDay = ceil($dateDiffInSeconds / (60 * 60 * 24));

        if ($diffDay > 0) {
            return $diffDay;
        } else {
            return 365 + $diffDay;
        }
    }
}
$helper = new TimeHelper();
print_r($helper->getDayByBirthday(29,5));
print_r(PHP_EOL);
print_r($helper->getNextWorkDay());