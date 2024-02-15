<?php

return [
//    'class' => 'app\components\lang\LangUrlManager',
    'baseUrl' => '',
    'suffix' => '/',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'cache' => false,
    'rules' => [
        'project/<project:[a-z0-9-_\.]+?>' => 'project/view',
        '' => 'site/index',
    ],
];
