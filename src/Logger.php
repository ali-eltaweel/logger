<?php

namespace Logger;

/**
 * Logger.
 * 
 * @api
 * @since 1.0.0
 * @version 2.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
class Logger {

    /**
     * Creates a new logger.
     * 
     * @api
     * @since 1.0.0
     * @version 1.2.0
     * 
     * @param Driver\IDriver $driver The logging driver.
     */
    public function __construct(private Driver\IDriver $driver) {}

    /**
     * Logs an emergency message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function emergency(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs an alert message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function alert(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs a critical message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function critical(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs an error message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function error(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs a warning message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function warning(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs a notice message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function notice(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs an info message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function info(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs a debug message.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function debug(callable $callback, ?string $unit = null, ?string $instance = null): void {

        $this->log(__FUNCTION__, $callback, $unit, $instance);
    }

    /**
     * Logs a record.
     * 
     * @api
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param LogLevel|string $level
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function log(LogLevel|string $level, callable $callback, ?string $unit = null, ?string $instance = null): void {

        $level = is_string($level) ? LogLevel::from($level) : $level;

        if (!$this->driver->accept($level, $unit, $instance)) {
            
            return;
        }

        $log = $callback();
        $message = array_key_first($log);
        $context = $log[$message];

        if (is_int($message)) {
            
            $message = $context;
            $context = [];
        }

        $this->driver->log(LogRecord::fromArray([
            'level'    => $level,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit,
            'instance' => $instance,
        ]));
    }
}
