<?php

namespace Khoa\Currency\Plugin;

class Example{

    public function beforeSetTitle(\Khoa\Currency\Controller\Index\PluginExample $subject, $title)
    {
        $title = $title . " to ";
        echo __METHOD__ . "</br>";

        return [$title];
    }
    public function afterSetTitle(\Khoa\Currency\Controller\Index\PluginExample $subject, $result)
    {

        echo __METHOD__ . "</br>";

        return '<h1>'. $result .'</h1>';

    }
    public function afterGetTitle(\Khoa\Currency\Controller\Index\PluginExample $subject, $result)
    {

        echo __METHOD__ . "</br>";

        return '<h1>'. $result . 'Khoa.com' .'</h1>';

    }


    public function aroundGetTitle(\Khoa\Currency\Controller\Index\PluginExample $subject, callable $proceed)
    {

        echo __METHOD__ . " - Before proceed() </br>";
        $result = $proceed();
        echo "</br>";
        echo __METHOD__ . " - After proceed() </br>";


        return $result;
    }
}