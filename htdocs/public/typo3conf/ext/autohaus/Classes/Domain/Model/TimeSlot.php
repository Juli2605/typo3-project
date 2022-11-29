<?php
namespace VENDOR\Autohaus\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class TimeSlot extends AbstractEntity {

    /**
     * @var int
     */
    protected $parentid;

    /**
     * @var int
     */
    protected $appointmentStart;

    /**
     * @var int
     */
    protected $appointmentEnd;

    /**
     * @var bool
     */
    protected $booked;

    /**
     * @return bool
     */
    public function isBooked(): bool
    {
        return $this->booked;
    }

    /**
     * @param bool $booked
     */
    public function setBooked(bool $booked): void
    {
        $this->booked = $booked;
    }

    /**
     * @return int
     */
    public function getParentid(): int
    {
        return $this->parentid;
    }

    /**
     * @param int $parentid
     */
    public function setParentid(int $parentid): void
    {
        $this->parentid = $parentid;
    }

    /**
     * @return int
     */
    public function getAppointmentEnd(): int
    {
        return $this->appointmentEnd;
    }

    /**
     * @param int $appointmentEnd
     */
    public function setAppointmentEnd(int $appointmentEnd): void
    {
        $this->appointmentEnd = $appointmentEnd;
    }

    /**
     * @return int
     */
    public function getAppointmentStart(): string
    {
        return $this->appointmentStart;
    }

    /**
     * @param int $appointmentStart
     */
    public function setAppointmentStart(string $appointmentStart): void
    {
        $this->appointmentStart = $appointmentStart;
    }


}