<?php
namespace Khoa\Currency\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $_postFactory;
    protected $_postFactory_2;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Khoa\Currency\Model\PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $pageObject = $this->_pageFactory->create();
        //select
        if (isset($_POST['title'])) {
            $post = $this->_postFactory->create();
            $collection = $post->getCollection();
            foreach($collection as $item){
                if($item->getData('id') == $_POST['title']) {
                    print_r($item->getData('title'));
                }
            }
        }

        //delete
//        if (isset($_POST['title'])) {
//            $post = $this->_postFactory->create();
//            $post->load($_POST['title']);
//            $post->delete();
//        }
        //insert
//        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/khoa.log');
//        $logger = new \Zend\Log\Logger();
//        $logger->addWriter($writer);
//        $logger->info(1);
//        if(isset($_POST['title'])) {
//            $logger->info(2);
//            $post = $this->_postFactory->create();
//            $logger->info($_POST['title']);
//            $post->setData('title',$_POST['title']);
//            $post->save();
//        }
        return $pageObject;
    }
}