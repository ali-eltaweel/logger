<?php

namespace Logger;

/**
 * Has Logger Interface.
 * 
 * @api
 * @abstract
 * @since 1.1.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
interface IHasLogger {

    /**
     * Sets the logger.
     * 
     * @api
     * @abstract
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param Logger|null $logger
     * @return void
     */
    public function setLogger(?Logger $logger): void;
}
