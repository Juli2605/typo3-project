<?php

namespace VENDOR\Autohaus\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use VENDOR\Autohaus\Domain\Model\TimeFromTo;
use VENDOR\Autohaus\Domain\Repository\AutoRepository;
use VENDOR\Autohaus\Domain\Repository\DayRepository;
use VENDOR\Autohaus\Domain\Repository\MonthRepository;
use VENDOR\Autohaus\Domain\Repository\TimeSlotRepository;

class BookingDisposalController extends ActionController{
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
     * @var MonthRepository
     */
    protected $monthRepository;

    public function injectMonthRepository(MonthRepository $monthRepository){
        $this->monthRepository = $monthRepository;
    }

    /**
     * @var DayRepository
     */
    protected $dayRepository;

    public function injectDayRepository(DayRepository $dayRepository){
        $this->dayRepository = $dayRepository;
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

    public function indexAction(){

    }

    /**
     * @param TimeFromTo $timeFromTo
     */
    public function createBookingsAction(TimeFromTo $timeFromTo){

        $autos = $this->autoRepository->findAll();
        foreach ($autos as  $key => $value){
            if(!$this->autoRepository->count(
                'tx_autohaus_domain_model_month',
                'month',
                $timeFromTo->getMonth(), $value->getUid())
            )
            {
                $this->autoRepository->insertBookingMonth(
                    $value->getUid(),
                    $timeFromTo->getMonth());
            }
        }

        $months = $this->monthRepository->findAll();
        foreach ($months as  $key => $value){
            for ($i = $timeFromTo->getDayFrom(); $i <= $timeFromTo->getDayTo(); $i++) {
                if(!$this->autoRepository->count('tx_autohaus_domain_model_day', 'day', $i, $value->getUid())) {
                    $this->autoRepository->insertBookingDay($value->getUid(), $i);
                }
            }
        }

        $days = $this->dayRepository->findAll();
        foreach ($days as  $key => $value){
            $timestampFrom = strtotime($value->getDay()."-".$timeFromTo->getMonth()."-2022 ".$timeFromTo->getTimeFrom());
            $timestampTo = strtotime($value->getDay()."-".$timeFromTo->getMonth()."-2022 ".$timeFromTo->getTimeTo());
            if(!$this->autoRepository->count('tx_autohaus_domain_model_timeslot', 'appointment_start', $timestampFrom, $value->getUid())) {
                $this->autoRepository->insertTimeslot($value->getUid(), $timestampFrom, $timestampTo);
            }
        }
    }
}