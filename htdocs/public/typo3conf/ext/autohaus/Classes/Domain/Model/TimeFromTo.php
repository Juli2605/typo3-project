<?php

namespace VENDOR\Autohaus\Domain\Model;

class TimeFromTo
{
    /**
     * @var int $month
     */
    protected $month;

    /**
     * @var int $dayFrom
     */
    protected $dayFrom;

    /**
     * @var int $dayTo
     */
    protected $dayTo;

    /**
     * @var string $timeFrom
     */
    protected $timeFrom;

    /**
     * @var string $timeTo
     */
    protected $timeTo;

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function setMonth(int $month): void
    {
        $this->month = $month;
    }

    /**
     * @return int
     */
    public function getDayFrom(): int
    {
        return $this->dayFrom;
    }

    /**
     * @param int $dayFrom
     */
    public function setDayFrom(int $dayFrom): void
    {
        $this->dayFrom = $dayFrom;
    }

    /**
     * @return int
     */
    public function getDayTo(): int
    {
        return $this->dayTo;
    }

    /**
     * @param int $dayTo
     */
    public function setDayTo(int $dayTo): void
    {
        $this->dayTo = $dayTo;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * @param string $timeFrom
     */
    public function setTimeFrom($timeFrom): void
    {
        $this->timeFrom = $timeFrom;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * @param string $timeTo
     */
    public function setTimeTo($timeTo): void
    {
        $this->timeTo = $timeTo;
    }



}