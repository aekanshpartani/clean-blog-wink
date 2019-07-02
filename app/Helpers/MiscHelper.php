<?php

if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function dateFormatter($original_date)
    {
        return date("F d, Y", strtotime($original_date));
    }

    function sampleImageIfNull($image){
        return is_null($image) ? "https://source.unsplash.com/1080x720/daily/?city,night" : $image;
    }
}
