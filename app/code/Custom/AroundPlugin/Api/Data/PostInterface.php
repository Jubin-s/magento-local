<?php
namespace Custom\AroundPlugin\Api\Data;


interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID            = 'id';
    const EMAIL         = 'email';
    const CREATION_TIME = 'created_at';
    const UPDATE_TIME   = 'updated_at';
    const COUNT         = 'count';
    const IS_ACTIVE     = 'status';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Get Creation time
     *
     * @return string|null
     */
    public function getCreation();

    /**
     * Get Update time
     *
     * @return string|null
     */
    public function getUpdation();

    /**
     * Get count
     *
     * @return int|null
     */
    public function getCount();


    /**
     * Is active
     *
     * @return int|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setId($id);

    /**
     * Set URL Key
     *
     * @param string $email
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setEmail($email);

    /**
     * Set title
     *
     * @param string $created_at
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setCreation($created_at);

    /**
     * Set content
     *
     * @param string $updated_at
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setUpdation($updated_at);

    /**
     * Set creation time
     *
     * @param string $count
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setCount($count);

    /**
     * Set update time
     *
     * @param int|bool $status
     * @return \Custom\AroundPlugin\Api\Data\PostInterface
     */
    public function setIsActive($status);
}