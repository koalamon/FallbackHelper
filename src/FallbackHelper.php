<?php

namespace Koalamon\FallbackHelper;

class FallbackHelper
{
    const FALLBACK_ENV_VAR = 'IS_FALLBACK_SERVER';
    const FALLBACK_STRING = 'FALLBACK';

    private $isFallbackServer;

    public function __construct()
    {
        $this->isFallbackServer = getenv(self::FALLBACK_ENV_VAR) == "true";
    }

    /**
     * @return boolean
     */
    public function isFallbackServer()
    {
        return $this->isFallbackServer;
    }

    /**
     * This function exits the program and returns the needed fallback string.
     *
     * @param string $message
     */
    public function doFallback($message = null)
    {
        if ($message) {
            echo "\nMessage: " . $message ;
        }

        die(self::FALLBACK_STRING);
    }
}
