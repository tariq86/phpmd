<?php

function testRuleAppliesMultipleTimesToFunctionWithAssotiativeArrayDefinitionWithDuplicatedKeys()
{
    $array = [
        'foo' => 42,
        'foo' => 43,
        'foo' => 44,
        'foo' => 45,
    ];
}
