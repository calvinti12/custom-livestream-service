<?php
    /*
        This file holds all the environment variables which are 
        relevant for software deploy.
        all global configs should be set here and retrieved from here
        using static functions
    */

    class EnvGlobals
    {
        private static $hls_http_stream = "http://192.168.178.82:8081/hls/test.m3u8";
        private static $vid_player_width = 1280;
        private static $vid_player_height = 720;

        public static function isLive()
        {
            $result = fopen(self::$hls_http_stream, "rb");
            if($result == false) {
                return false;
            } else {
                return true;
            }
        }

        public static function getStreamUrl()
        {
            return self::$hls_http_stream;
        }

        public static function getPlayerWidth() 
        {
            return self::$vid_player_width;
        }

        public static function getPlayerHeight() 
        {
            return self::$vid_player_height;
        }
    }
?>