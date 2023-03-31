<?php
/*=========================================================================================
    App Name: Monitoring Eksekusi PTUN Jakarta
    File Name: Date Helper
    --------------------------------------------------------------------------------------
    Author: R. Idham Aziz Marlin, S.Kom
    Email: idhamaziz390@gmail.com
==========================================================================================*/

use Carbon\Carbon;

if(!function_exists('getDefaultToday')) {
    function getDefaultToday() {
        return Carbon::now();
    }
}

if(!function_exists('getTodayDate')) {
    function getTodayDate() {
        return Carbon::now()->toDateTimeString();
    }
}

if(!function_exists('getTodayOnlyDate')) {
    function getTodayOnlyDate() {
        return Carbon::today()->toDateString();
    }
}

if(!function_exists('getTodayOnlyTime')) {
    function getTodayOnlyTime() {
        return Carbon::now()->toTimeString();
    }
}

if(!function_exists('addDayToTodayDate')) {
    function addDayToTodayDate($day = 1) {
        return Carbon::now()->addDays($day);
    }
}

if(!function_exists('simpleDate')) {
    function simpleDate($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->translatedFormat('d-m-Y');
    }
}

if(!function_exists('fullSimpleDate')) {
    function fullSimpleDate($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->translatedFormat('d-m-Y H:i');
    }
}

if(!function_exists('shortDate')) {
    function shortDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('d F Y');
    }
}

if(!function_exists('fullShortDate')) {
    function fullShortDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('l, d F Y');
    }
}

if(!function_exists('longDate')) {
    function longDate($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->translatedFormat('d F Y H:i');
    }
}

if(!function_exists('fullLongDate')) {
    function fullLongDate($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->translatedFormat('l, d F Y H:i');
    }
}

if(!function_exists('longToShortDate')) {
    function longToShortDate($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->translatedFormat('d F Y');
    }
}

if(!function_exists('shortDateMysqlFormat')) {
    function shortDateMysqlFormat($date) {
        return Carbon::createFromFormat('d/m/Y', $date)->translatedFormat('Y-m-d');
    }
}

if(!function_exists('humanDate')) {
    function humanDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('d/m/Y');
    }
}

if(!function_exists('longHumanDate')) {
    function longHumanDate($date) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->translatedFormat('d/m/Y');
    }
}

if(!function_exists('getAge')) {
    function getAge($date) {
        return Carbon::parse($date)->age;
    }
}

if(!function_exists('getMonthFromDate')) {
    function getMonthFromDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('F');
    }
}

if(!function_exists('getYearFromDate')) {
    function getYearFromDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('Y');
    }
}

if(!function_exists('getNumberMonth')) {
    function getNumberMonth() {
        return Carbon::now()->month;
    }
}

if(!function_exists('getNumberMonthFromDate')) {
    function getNumberMonthFromDate($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('n');
    }
}

if(!function_exists('getMonth')) {
    function getMonth() {
        return Carbon::now()->translatedFormat('F');
    }
}

if(!function_exists('getYear')) {
    function getYear() {
        return Carbon::now()->year;
    }
}

if(!function_exists('getDiffInYear')) {
    function getDiffInYear($date) {
        return Carbon::now()->diffInYears($date);
    }
}

if(!function_exists('addMinuteToDate')) {
    function addMinuteToDate($date, $minute) {
        return Carbon::parse($date)->addMinutes($minute);
    }
}
