#!/usr/bin/php
<?php

set_time_limit(6000);

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS",true);
define("BX_CRONTAB", true);
define('BX_WITH_ON_AFTER_EPILOG', true);
define('BX_NO_ACCELERATOR_RESET', true);

require( $_SERVER["DOCUMENT_ROOT"]. "/bitrix/modules/main/include/prolog_before.php" );

use SmartCallBack\API,
    SmartCallBack\Struct,
    SmartCallBack\Cron;
use SmartCallBack\DownloadItems;


if ( CModule::IncludeModule("smartcallback")) {

    //if ( CModule::IncludeModule("voximplant")) {

//        SmartCallBack\Cron::createObj();
//        SmartCallBack\Cron::writeCallsToB24();

//        $storage = \Bitrix\Disk\Driver::getInstance()->getStorageByUserId(1);
//
//        if ($storage) {
//            $fileArray = \CFile::MakeFileArray($_SERVER['DOCUMENT_ROOT'].'/test.jpg');
//
//            $file = $folder->uploadFile($fileArray, array(
//                'CREATED_BY' => 1
//            ));
//
//        }



        //$res = \Bitrix\Disk\Internals\StorageTable::add($storage);

//        $userID = 1;
//        $phone = "79152955011";
//        $dealID = 41;
//        $duration = 144;
//        // Создадим звонок
//        $VIcall = new VICall( $userID, $phone, $dealID );
//        $ID     = $VIcall->createCall($duration, $dealID);
//        $callId = $VIcall->callID; // Получим ID звонка
//
//        // Создадим Activity
//        $CRMActivity = new \SmartCallBack\CRMActivity( $userID, $phone, $dealID, $callId );
//        $CRMActivity->addActivity([103], $duration);


    //}

}