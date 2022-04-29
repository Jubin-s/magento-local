<?php
namespace Custom\EventObsr1\Model\ResourceModel;

/**
 * Blog post mysql resource
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    protected $_date;

    
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('luma_page_details', 'id');
    }

    }
