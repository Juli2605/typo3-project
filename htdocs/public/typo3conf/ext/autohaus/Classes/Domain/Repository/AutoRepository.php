<?php
namespace VENDOR\Autohaus\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class AutoRepository extends Repository
{
    public function initializeObject()
    {
        /** @var Typo3QuerySettings $querySettings */
        $querySettings = GeneralUtility::makeInstance(Typo3QuerySettings::class);

        // don't add the pid constraint
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    public function insertBookingMonth($autoId, $month){
        //if month 6 exists at this car then do not add month, else add

            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_autohaus_domain_model_month');
            $affectedRows = $queryBuilder
                ->insert('tx_autohaus_domain_model_month')
                ->values([
                    'month' => $month,
                    'parentid' => $autoId,
                    'parenttable' => 'tx_autohaus_domain_model_auto',
                    'pid' => 5,
                ])
                ->execute();

    }

    public function insertBookingDay($monthId, $day){

        //if day exists at this month then do not add day

            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable(
                'tx_autohaus_domain_model_day'
            );
            $affectedRows = $queryBuilder
                ->insert('tx_autohaus_domain_model_day')
                ->values([
                    'day' => $day,
                    'parentid' => $monthId,
                    'parenttable' => 'tx_autohaus_domain_model_month',
                    'pid' => 5,
                ])
                ->execute();

    }

    public function insertTimeslot ($dayId, $timeFrom, $timeTo){

            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable(
                'tx_autohaus_domain_model_timeslot'
            );
            $affectedRows = $queryBuilder
                ->insert('tx_autohaus_domain_model_timeslot')
                ->values([
                    'appointment_start' => $timeFrom,
                    'appointment_end' => $timeTo,
                    'parenttable' => 'tx_autohaus_domain_model_day',
                    'parentid' => $dayId,
                    'pid' => 5,
                ])
                ->execute();

    }

    public function count($table, $group, $value, $autoId){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($table);
        $count = $queryBuilder
            ->count('uid')
            ->from($table)
            ->where(
                $queryBuilder->expr()->eq($group, $value)
            )
            ->andWhere(
                $queryBuilder->expr()->eq('parentid', $autoId)
            )
            ->execute()
            ->fetchColumn(0);
        return (bool)$count;
    }

    public function countEqualTimeSlots($startTime){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_autohaus_domain_model_timeslot');
        $count = $queryBuilder
            ->count('uid')
            ->from('tx_autohaus_domain_model_timeslot')
            ->where(
                $queryBuilder->expr()->eq('appointment_start', $startTime)
            )
            ->andWhere(
                $queryBuilder->expr()->eq('booked', 1)
            )
            ->execute()
            ->fetchColumn(0);
        return $count;
    }

    public function bookEqualTimeslots($startTime){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_autohaus_domain_model_timeslot');
        $queryBuilder
            ->update('tx_autohaus_domain_model_timeslot')
            ->where(
                $queryBuilder->expr()->eq('appointment_start', $startTime)
            )
            ->set('booked', 1)
            ->execute();
    }


}