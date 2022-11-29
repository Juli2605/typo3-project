<?php
namespace VENDOR\Autohaus\Controller;


use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use VENDOR\Autohaus\Domain\Repository\CategorycommentRepository;

class FeedbacksController extends ActionController
{
    /**
     * @var CategorycommentRepository
     */
    protected $categorycommentRepository;

    /**
     * @param CategorycommentRepository $categorycommentRepository
     */
    public function injectFeedbacksRepository(CategorycommentRepository $categorycommentRepository){
        $this->categorycommentRepository = $categorycommentRepository;
    }

    public function indexAction(){
        $feedbacks = $this->categorycommentRepository->findAll();
        $this->view->assign('feedbacks', $feedbacks);
    }

}