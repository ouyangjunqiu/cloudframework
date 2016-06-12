<?php

class TopLinker_Response
{
    public static function create($apiName, $content, $url = null)
    {
        # @TODO: Find and make special response api interface
        return new TopLinker_Response_Common($content, $url);
    }
}
