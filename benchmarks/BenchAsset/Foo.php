<?php

/**
 * @see       https://github.com/laminas/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminas/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasBench\ServiceManager\BenchAsset;

class Foo
{
    protected $options;

    public function __construct($options = null)
    {
        $this->options = $options;
    }
}