<?php
namespace VENDOR\Autohaus\Domain\Model;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

class Auto extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * @var string
     */
    protected $model;

    /**
     * @var int
     */
    protected $productionYear;

    /**
     * @var int
     */
    protected $price;

    /**
     * @var bool
     */
    protected $booked;

    /**
     * @var bool
     */
    protected $sold;

    /**
     * @var ObjectStorage<FileReference>
     */
    protected $image ;

    /**
     * @var ObjectStorage<FileReference>
     */
    protected $videoPresentation ;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\VENDOR\Autohaus\Domain\Model\Month> $month
     */
    protected $month;

    /**
     * @return ObjectStorage
     */
    public function getMonth(): ObjectStorage
    {
        return $this->month;
    }

    /**
     * @param ObjectStorage $month
     */
    public function setMonth(ObjectStorage $month): void
    {
        $this->month = $month;
    }


    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return int
     */
    public function getProductionYear(): int
    {
        return $this->productionYear;
    }

    /**
     * @param int $productionYear
     */
    public function setProductionYear(int $productionYear): void
    {
        $this->productionYear = $productionYear;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

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
     * @return bool
     */
    public function isSold(): bool
    {
        return $this->sold;
    }

    /**
     * @param bool $sold
     */
    public function setSold(bool $sold): void
    {
        $this->sold = $sold;
    }

    /**
     * @return ObjectStorage
     */
    public function getImage(): ObjectStorage
    {
        return $this->image;
    }

    /**
     * @param ObjectStorage $image
     */
    public function setImage(ObjectStorage $image): void
    {
        $this->image = $image;
    }

    /**
     * @return ObjectStorage
     */
    public function getVideoPresentation(): ObjectStorage
    {
        return $this->videoPresentation;
    }

    /**
     * @param ObjectStorage $videoPresentation
     */
    public function setVideoPresentation(ObjectStorage $videoPresentation): void
    {
        $this->videoPresentation = $videoPresentation;
    }


}