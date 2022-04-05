<?php
 
namespace Custom\AfterPlugin\Plugin;
 
use Magento\Catalog\Model\Product;
use Custom\AfterPlugin\Helper\MyHelper;

class ProductPlugin
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(MyHelper $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function afterGetName(Product $subject, $result)
    {

        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
$config        = $objectManager->get('\Magento\Theme\Block\Html\Title');
$heading       = $config->getPageHeading();
        return $this->scopeConfig->getName().$result;
    }
}