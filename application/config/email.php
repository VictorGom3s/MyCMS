<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';

$config['smtp_port'] = '465';
$config['smtp_timeout'] = '60';
$config['charset'] = 'utf-8'; // Default should be utf-8 (this should be a text field) 
$config['newline'] = "\r\n"; //"\r\n" or "\n" or "\r". DEFAULT should be "\r\n" 
$config['crlf'] = "\r\n"; //"\r\n" or "\n" or "\r" DEFAULT should be "\r\n" 
$config['mailtype'] = 'html';
