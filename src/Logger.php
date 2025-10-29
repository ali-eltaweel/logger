<?php

namespace Logger;

/**
 * Logger.
 * 
 * @api
 * @since 1.0.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
class Logger {

    public function __construct(private Driver $driver) {}

    /**
     * Logs an emergency message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function emergency(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs an alert message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function alert(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs a critical message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function critical(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs an error message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function error(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs a warning message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function warning(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs a notice message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function notice(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs an info message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function info(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs a debug message.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array $context
     * @param mixed $unit
     * @param mixed $instance
     * @return void
     */
    public function debug(string $message, array $context = [], ?string $unit = null, ?string $instance = null): void {

        $this->log([
            'level'    => LogLevel::from(__FUNCTION__),
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]);
    }

    /**
     * Logs a record.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param LogRecord|array{level: LogLevel, unit: ?string, instance: ?string, message: string, context: ?array} $record The log record to be logged.
     * @return void
     */
    public function log(LogRecord|array $record): void {

        $this->driver->log(is_array($record) ? LogRecord::fromArray($record) : $record);
    }
}
