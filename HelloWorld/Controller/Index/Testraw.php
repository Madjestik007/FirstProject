<?php

declare(strict_types=1);

namespace Perspective\HelloWorld\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;


class Testraw implements ActionInterface
{
    protected $resultFactory;

    public function __construct(RawFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }


    /*Вывод строки с помощью класса Raw.php*/

    // public function execute()
    // {
    //     $page = $this->resultFactory->create()
    //     ->setContents("<i>Perspective Studio</i>");
    //     return $page;
    // }



    /*Вывод в формате xml с помощью класса Raw.php*/

    public function execute()
    {
        $page = $this->resultFactory->create()
        ->setHeader('Content-Type', 'text/xml')
        ->setContents('<root><name>Perspective Studio</name><job>Magento Developer</job></root>'); 
        return $page;
    }

}