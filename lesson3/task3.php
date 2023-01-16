<?php

$currentTime = strtotime("3:24:04 8-10-2022");
print_r(storeOpeningHours($currentTime));

function storeOpeningHours($time)
{
    $dateArray = getdate($time);

    if ($dateArray["weekday"] == "Saturday" || $dateArray["weekday"] == "Sunday") {
        $dateOpen = getdate(strtotime("next Monday", $time));
        $dateArray["weekday"] == "Saturday" ? $timeToStoreOpen = 48 : $timeToStoreOpen = 24;
        $hoursToOpen = $timeToStoreOpen - ($dateArray["hours"] - 8);
        $minutesToOpen = 59 - $dateArray["minutes"];
        $secondsToOpen = 60 - $dateArray["seconds"];
        return "Store will open on {$dateOpen["weekday"]} {$dateOpen["mday"]}-{$dateOpen["mon"]}-{$dateOpen["year"]} at 9 am in {$hoursToOpen}:{$minutesToOpen}:{$secondsToOpen}";

    } else if ($dateArray["hours"] < 9) {
        $hoursToOpen = 8 - $dateArray["hours"];
        $minutesToOpen = 59 - $dateArray["minutes"];
        $secondsToOpen = 60 - $dateArray["seconds"];
        return "Store will open today in {$hoursToOpen}:{$minutesToOpen}:{$secondsToOpen}";

    } else if ($dateArray["hours"] > 21) {
        $hoursAfterClosing = $dateArray["hours"] - 21;
        return "Store closed {$hoursAfterClosing}:{$dateArray["minutes"]}:{$dateArray["seconds"]} ago";

    } else {
        $hoursToClose = 20 - $dateArray["hours"];
        $minutesToClose = 59 - $dateArray["minutes"];
        $secondsToClose = 60 - $dateArray["seconds"];
        return "Store is open. Closes in {$hoursToClose}:{$minutesToClose}:{$secondsToClose}";
    }
}
