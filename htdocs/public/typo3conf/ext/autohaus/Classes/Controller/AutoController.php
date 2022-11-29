<?php
namespace VENDOR\Autohaus\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use VENDOR\Autohaus\Domain\Repository\AutoRepository;
use VENDOR\Autohaus\Domain\Model\Auto;
use VENDOR\Autohaus\Domain\Repository\TimeSlotRepository;
use VENDOR\Autohaus\Domain\Model\TimeSlot;

class AutoController extends ActionController
{

    /**
     * @var AutoRepository
     */
    protected $autoRepository;

    /**
     * @param AutoRepository $autoRepository
     */
    public function injectAutoRepository(AutoRepository $autoRepository){
        $this->autoRepository = $autoRepository;
    }

    /**
     * @var TimeSlotRepository
     */
    protected $timeSlotRepository;

    /**
     * @param TimeSlotRepository $timeSlotRepository
     */
    public function injectTimeSlotRepository(TimeSlotRepository $timeSlotRepository){
        $this->timeSlotRepository = $timeSlotRepository;
    }

    public function listAction(){
        $autos = $this->autoRepository->findAll();
        $this->view->assign('autos', $autos);

    }

    public function detailAction(Auto $auto){
        $this->view->assign('auto', $auto);
    }

    /**
     * @param Auto $auto
     */
    public function formAction(Auto $auto, Timeslot $timeslot) {
        $this->view->assignMultiple([
                'auto' => $auto,
                'timeslot' => $timeslot
        ]);
    }

    /**
     * @param TimeSlot $timeslot
     * @param Auto $auto
     */
    public function bookAction (TimeSlot $timeslot, Auto $auto){
        $equalTimeSlots = $this->autoRepository->countEqualTimeSlots($timeslot->getAppointmentStart());
        $timeslot->setBooked(1);
        $this->timeSlotRepository->update($timeslot);

        if ($equalTimeSlots === $this->settings['workersAtTime']){
            $this->autoRepository->bookEqualTimeslots($timeslot->getAppointmentStart());
        }
    }
}