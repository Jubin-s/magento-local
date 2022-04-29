<?php namespace Custom\EventObsr1\Model;

use Custom\EventObsr1\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements PostInterface, IdentityInterface
{

    /**#@+
     * Post's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'custom_eventobsr1_post';

    /**
     * @var string
     */
    protected $_cacheTag = 'custom_eventobsr1_post';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'custom_eventobsr1_post';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Custom\EventObsr1\Model\ResourceModel\Post');
    }


    /**
     * Prepare post's statuses.
     * Available event blog_post_get_available_statuses to customize statuses.
     *
     * @return array
     */
   /* public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Get URL Key
     *
     * @return string
     */

    /**
     * Get title
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->getData(self::URL);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreation()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdation()
    {
        return $this->getData(self::UPDATE_TIME);
    }

     /**
     * Get count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->getData(self::COUNT);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return \Custom\EventObsr1\Api\Data\PostInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Set email
     *
     * @param string $url
     * @return \Custom\EventObsr1\Api\Data\PostInterface
     */
    public function setUrl($url)
    {
        return $this->setData(self::URL, $url);
    }

    /**
     * Set creation time
     *
     * @param string $created_at
     * @return \Custom\EventObsr1\Api\Data\PostInterface
     */
    public function setCreation($created_at)
    {
        return $this->setData(self::CREATION_TIME, $created_at);
    }

    /**
     * Set update time
     *
     * @param string $updated_at
     * @return \Custom\EventObsr1\Api\Data\PostInterface
     */
    public function setUpdation($updated_at)
    {
        return $this->setData(self::UPDATE_TIME, $updated_at);
    }


 /**
     * Set count
     *
     * @param string $count
     * @return \Custom\EventObsr1\Api\Data\PostInterface
     */
    public function setCount($count)
    {
        return $this->setData(self::COUNT, $count);
    }


}
