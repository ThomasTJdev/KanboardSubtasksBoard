<?php

namespace Kanboard\Plugin\KanboardSubtasksBoard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {

    }

    public function getClasses()
    {
        return array(
            'Plugin\KanboardSubtasksBoard\Model' => array(
		'KanboardSubtasksBoard'
             )
         );
    }

    public function getPluginName()
    {
        return 'KanboardSubtasksBoard';
    }
    public function getPluginAuthor()
    {
        return 'TTJ';
    }
    public function getPluginVersion()
    {
        return '0.0.1';
    }
    public function getPluginDescription()
    {
        return 'Show on board without mouseover. See readme for installation.';
    }
    public function getPluginHomepage()
    {
        return '';
    }
}
