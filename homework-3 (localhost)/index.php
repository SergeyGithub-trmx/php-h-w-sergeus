<?php

require_once('functions.php');

$page_content = includeTemplate('main.php', []);

$page_header = includeTemplate('layouts/header.php', []);
$page_footer = includeTemplate('layouts/footer.php', []);

$page_layout = includeTemplate('layouts/main-layout.php', [
    'page_content' => $page_content,
    'page_header' => $page_header,
    'page_footer' => $page_footer,
]);

print($page_layout);
