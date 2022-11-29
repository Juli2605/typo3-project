<?php
namespace VENDOR\Autohaus\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Month extends AbstractEntity
{
    /**
     * @var int
     */
    protected $parentid;


    /**
     * @var int
     */
    protected $month;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VENDOR\Autohaus\Domain\Model\Day> $day
     */
    protected $day;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getDay(): \TYPO3\CMS\Extbase\Persistence\ObjectStorage
    {
        return $this->day;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $day
     */
    public function setDay(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $day): void
    {
        $this->day = $day;
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

}
