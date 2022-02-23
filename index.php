<?php

$content = file_get_contents('index.html');

$browserSyncScript = '
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src=\'http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.7\'><\/script>".replace("HOST", location.hostname));
        //]]></script>';

echo str_replace('<!--SCRIPT-->', $browserSyncScript, $content);