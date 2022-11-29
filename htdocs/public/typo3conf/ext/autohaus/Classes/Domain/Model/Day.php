<?php
namespace VENDOR\Autohaus\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Day extends AbstractEntity
{
    /**
     * @var int
     */
    protected $parentid;

    /**
     * @var int
     */
    protected $day;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VENDOR\Autohaus\Domain\Model\TimeSlot> $timeslot
     */
    protected $timeslot;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getTimeslot(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->timeslot;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $timeslot
     */
    public function setTimeslot(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $timeslot): void
    {
        $this->timeslot = $timeslot;
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
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function setDay(int $day): void
    {
        $this->day = $day;
    }

}