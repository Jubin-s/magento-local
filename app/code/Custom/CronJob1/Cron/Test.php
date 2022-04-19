<?php
namespace Custom\CronJob1\Cron;
 
class Test
{
    protected $_logger;
 
    public function __construct(
        \Custom\CronJob1\Logger\Logger $logger
    ) {
        $this->_logger = $logger;
    }
 
    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

$productCollectionFactory = $objectManager->create('Magento\Catalog\Model\ResourceModel\Product\CollectionFactory');
$productCollection = $productCollectionFactory
    ->create()
    ->addAttributeToSelect('*')
    ->addAttributeToSort('created_at', 'DESC')
    ->joinField('stock_item', 'cataloginventory_stock_item', 'qty', 'product_id=entity_id', 'qty=0')
    ->setPageSize(10)
    ->load();

foreach ($productCollection as $product) {
                $this->_logger->info($product->getName());
}

    }
}