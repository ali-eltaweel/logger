<?php

namespace Logger;

/**
 * Logger Driver Interface.
 * 
 * @api
 * @abstract
 * @since 1.0.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
interface IDriver {

    /**
     * Logs a record.
     * 
     * @api
     * @abstract
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param LogRecord $record The log record to be logged.
     * @return void
     */
    public function log(LogRecord $record): void;
}
