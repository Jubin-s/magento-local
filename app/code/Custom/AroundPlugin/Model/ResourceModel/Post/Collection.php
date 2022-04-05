<?php 
namespace Custom\AroundPlugin\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	
	public function _construct(){
		$this->_init("Custom\AroundPlugin\Model\Post","Custom\AroundPlugin\Model\ResourceModel\Post");
	}
}
 ?>