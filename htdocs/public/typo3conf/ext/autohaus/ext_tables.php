<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'VENDOR.autohaus',
    'web',
    'tx_Bookingdisposalcontroller',
    'bottom',
    [
        'BookingDisposal' => 'index, createBookings',
    ],
    [
        'access' => 'admin',
        'labels' => 'Generate Booking Disposals',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'VENDOR.autohaus',
    'web',
    'tx_Feedbackscontroller',
    'bottom',
    [
        'Feedbacks' => 'index',
    ],
    [
        'access' => 'admin',
        'labels' => 'Feedbacks',
    ]
);


