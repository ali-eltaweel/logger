<?php

namespace Logger;

use DTO\DataTransferObject;

/**
 * Log Record.
 * 
 * @api
 * @final
 * @since 1.0.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 * 
 * @property-read string   $message
 * @property-read ?string  $unit
 * @property-read ?string  $instance
 * @property-read array    $context
 * @property-read LogLevel $level
 */
final class LogRecord extends DataTransferObject {

    /**
     * Creates a new Log Record instance.
     * 
     * @api
     * @final
     * @override
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param LogLevel $level
     * @param mixed $unit
     * @param mixed $instance
     * @param string $message
     * @param mixed $context
     */
    public final function __construct(LogLevel $level, ?string $unit, ?string $instance, string $message, ?array $context) {

        parent::__construct(func_get_args());
    }
}
