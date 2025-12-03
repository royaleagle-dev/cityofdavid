<?php

$urlRoutes = array(
    'about'=>'about',
    'index'=>'index',
    'contact'=>'contact',
    'give' => 'contact/give',
    'gallery'=>'gallery',
    '404' => 'error_404',
    'mission'=>'mission',
    'vision'=>'vision',
    'events'=>'events',
    'registerSubscriber' => 'subscriber/addSubscriber',
    'sendMessage' => 'index/send_message',
    //
    //for the adimin section
    //
    'adminLogin' => 'adminlogin',
    'authentication' => 'adminlogin/authenticate', 
    'dashboard' => 'administrator/index',
    'logout' => 'administrator/logout',
    'uploadPhoto' => 'administrator/uploadPhoto',
    'photoUploader' => 'administrator/photoUploader',
    'adminViewPhotos' => 'administrator/viewPhotos',
    'deletePhoto' => 'administrator/deletePhoto',
    'deletePhotos' => 'administrator/deletePhotos',
    'addEvent' => 'administrator/addEvent',
    'adminEvents'=>'administrator/viewEvents',
    'deleteEvent'=>'administrator/deleteEvent',
    'deleteAllEvents' => 'administrator/deleteAllEvents',
    'visitors' => 'administrator/visitors',
    'addSermon' => 'administrator/addSermon',
    'viewSermons' => 'administrator/viewSermons',
    'adminVideos' => 'administrator/videos',
    'addVideo' => 'administrator/addVideo',
    'deleteVideo' => 'administrator/deleteVideo',
    'updateEvent' => 'administrator/updateEvent',
    'adminSubscribers' => 'administrator/subscribers',
    'deleteSubscriber' => 'administrator/deleteSubscriber',
    'contactMessages' => 'administrator/contactMessages',
    'replyMessage' => 'administrator/contactMessage',
    'sendEmail' => 'administrator/sendEmail',

);

define ("ROUTES", $urlRoutes);