<?php
namespace App\Library\Pay\Youzan\Open; class Protocol { const SIGN_KEY = 'sign'; const VERSION_KEY = 'v'; const APP_ID_KEY = 'app_id'; const METHOD_KEY = 'method'; const FORMAT_KEY = 'format'; const TOKEN_KEY = 'access_token'; const TIMESTAMP_KEY = 'timestamp'; const SIGN_METHOD_KEY = 'sign_method'; const ALLOWED_DEVIATE_SECONDS = 600; const ERR_SYSTEM = -1; const ERR_INVALID_APP_ID = 40001; const ERR_INVALID_APP = 40002; const ERR_INVALID_TIMESTAMP = 40003; const ERR_EMPTY_SIGNATURE = 40004; const ERR_INVALID_SIGNATURE = 40005; const ERR_INVALID_METHOD_NAME = 40006; const ERR_INVALID_METHOD = 40007; const ERR_INVALID_TEAM = 40008; const ERR_PARAMETER = 41000; const ERR_LOGIC = 50000; public static function sign($spb3d74e, $sp3e77f9, $sp888af6 = 'md5') { if (!is_array($sp3e77f9)) { $sp3e77f9 = array(); } ksort($sp3e77f9); $spdbcc06 = ''; foreach ($sp3e77f9 as $spe3274c => $spd7786b) { $spdbcc06 .= $spe3274c . $spd7786b; } return self::hash($sp888af6, $spb3d74e . $spdbcc06 . $spb3d74e); } private static function hash($sp888af6, $spdbcc06) { switch ($sp888af6) { case 'md5': default: $sp772d2b = md5($spdbcc06); break; } return $sp772d2b; } public static function allowedSignMethods() { return array('md5'); } public static function allowedFormat() { return array('json'); } }