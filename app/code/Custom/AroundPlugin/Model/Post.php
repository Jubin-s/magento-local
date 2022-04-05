<?php namespace Custom\AroundPlugin\Model;

use Custom\AroundPlugin\Api\Data\PostInterface;
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
    const CACHE_TAG = 'custom_aroundplugin_post';

    /**
     * @var string
     */
    protected $_cacheTag = 'custom_aroundplugin_post';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'custom_aroundplugin_post';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Custom\AroundPlugin\Model\ResourceModel\Post');
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
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
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
     * Is active
     *
     * @return bool|null
     */
    public function isActive()
    {
        return (int) $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Set email
     *
     * @param string $email
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Set creation time
     *
     * @param string $created_at
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setCreation($created_at)
    {
        return $this->setData(self::CREATION_TIME, $created_at);
    }

    /**
     * Set update time
     *
     * @param string $updated_at
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setUpdation($updated_at)
    {
        return $this->setData(self::UPDATE_TIME, $updatede_at);
    }


 /**
     * Set count
     *
     * @param string $count
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setCount($count)
    {
        return $this->setData(self::COUNT, $count);
    }

    /**
     * Set is active
     *
     * @param int|bool $status
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setIsActive($status)
    {
        return $this->setData(self::IS_ACTIVE, $status);
    }

}
