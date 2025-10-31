<?php

namespace Logger\Driver;

use Logger\{ LogLevel, LogRecord };

/**
 * Logger Driver Interface.
 * 
 * @api
 * @abstract
 * @since 1.0.0
 * @version 2.0.0
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

    /**
     * Checks if the driver accepts a log with the given level, unit, and instance.
     * 
     * @api
     * @abstract
     * @since 2.0.0
     * @version 1.0.0
     * 
     * @param LogLevel $level
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function accept(LogLevel $level, ?string $unit, ?string $instance): bool;
}
