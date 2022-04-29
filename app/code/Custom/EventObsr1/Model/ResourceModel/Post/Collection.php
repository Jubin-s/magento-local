<?php 
namespace Custom\EventObsr1\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	
	public function _construct(){
		$this->_init("Custom\EventObsr1\Model\Post","Custom\EventObsr1\Model\ResourceModel\Post");
	}
}
 ?>