<?php
 
namespace Custom\PluginMsg\Plugin;
 
class BeforePlugin
{
 
    public function beforeExecute(
        \Magento\Cms\Controller\Page\View $subject
        )
    {
        die('error');
    }
 
}