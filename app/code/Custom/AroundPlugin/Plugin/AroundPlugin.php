<?php

namespace Custom\AroundPlugin\Plugin;

use Custom\AroundPlugin\Model\PostFactory;
use Custom\AroundPlugin\Model\ResourceModel\Post;
use Custom\AroundPlugin\Model\ResourceModel\Post\CollectionFactory;
use Magento\Customer\Model\Session;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Exception\AlreadyExistsException;
class AroundPlugin
{
    /**
     * @var Post
     */
    protected $post;
    /**
     * @var PostFactory
     */
    protected $postFactory;
    /**
     * @var Session
     */
    protected $session;
    protected $collectionFactory;
    /**
     * @param Post $post
     * @param PostFactory $postFactory
     * @param Session $session
     * @param PostFactory $postFactory
     */
    public function __construct(
        Post  $post,
        PostFactory  $postFactory,
        Session $session,
        CollectionFactory $collectionFactory
    )   {
        $this->post=$post;
        $this->postFactory=$postFactory;
        $this->session=$session;
        $this->collectionFactory=$collectionFactory;
}
    /**
     * @param \Magento\Customer\Controller\Account\LoginPost $subject
     * @param callable $proceed
     * @return string
     * @throws AlreadyExistsException
     */
    public function aroundExecute(\Magento\Customer\Controller\Account\LoginPost $subject, $proceed)
    {
        $result = $proceed();
        $login = $subject->getRequest()->getPost('login');
        $email = $login['username'];
        if(!$this->session->isLoggedIn())
        {
            $collection=$this->collectionFactory->create();
            $collection->addFieldToFilter('email',['eq' => $email]);

            /** @var \Custom\AroundPlugin\Model\Post $FilteredData
             *
             */

            $FilteredData = $collection->getFirstItem();
            $incrementData = $FilteredData->getCount()+1;
            $FilteredData->setCount($incrementData);
            $FilteredData->setIsActive("InActive");
             /** @var Post $post */
            $this->post->save($FilteredData);
        }
        else
        {
            $collection=$this->collectionFactory->create();
            $collection->addFieldToFilter('email',['eq' => $email]);

            /** @var \Custom\AroundPlugin\Model\Post $FilteredData2
             *
             */

            $FilteredData2 = $collection->getFirstItem();
            $FilteredData2->setEmail($email);
            $FilteredData2->setCount(0);
            $FilteredData2->setIsActive("Active");
            /** @var Post $post */
            $this->post->save($FilteredData2);
        }

        return $result;
    }
}

