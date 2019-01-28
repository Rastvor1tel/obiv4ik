<?php
 
function downloadJs($file_url, $save_to)
{
    $content = file_get_contents($file_url);
    file_put_contents($save_to, $content);
}


downloadJs('https://api-maps.yandex.ru/services/inception/inception.js', realpath("./js") . '/inception.js');
downloadJs('https://static.doubleclick.net/instream/ad_status.js', realpath("./js") . '/ad_status.js');
downloadJs('https://app.comagic.ru/static/cs.min.js', realpath("./js") . '/cs.min.js');
downloadJs('https://mc.yandex.ru/metrika/watch.js', realpath("./js") . '/watch.js');
downloadJs('https://www.google-analytics.com/analytics.js', realpath("./js") . '/analytics.js');
downloadJs('https://api-maps.yandex.ru/services/inception/inception.js', realpath("./js") . '/inception.js');
?>
