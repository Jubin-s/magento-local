<?php
namespace Custom\EventObsr1\Observer;
use Custom\EventObsr1\Model\PostFactory;
use Custom\EventObsr1\Model\ResourceModel\Post;
use Custom\EventObsr1\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
class Page implements ObserverInterface 
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
    protected $collectionFactory;
    /**
     * @param Post $post
     * @param PostFactory $postFactory
     * @param PostFactory $postFactory
     */
    public function __construct(
        Post  $post,
        PostFactory  $postFactory,
        CollectionFactory $collectionFactory,
        Observer $observer
    )   {
        $this->post=$post;
        $this->postFactory=$postFactory;
        $this->collectionFactory=$collectionFactory;
        $this->observer=$observer;
}

   public function execute($observer) {
    $urlInterface = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\UrlInterface');
    $url=$urlInterface->getCurrentUrl();
    $collection=$this->collectionFactory->create();
    $collection->addFieldToFilter('url',['eq' => $url]);
    $FilteredData = $collection->getFirstItem();
    $r1=$FilteredData->getUrl();
    if($r1==$url)
    {
        $incrementData = $FilteredData->getCount()+1;
        $FilteredData->setCount($incrementData);
        $this->post->save($FilteredData);

    }
    else
    {
        $FilteredData->setCount(1);
        $FilteredData->setUrl($url);
        $this->post->save($FilteredData);


    }
} 
} 