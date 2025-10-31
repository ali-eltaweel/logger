<?php

namespace Logger;

/**
 * Emits log messages.
 * 
 * @api
 * @since 1.1.0
 * @version 2.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
trait EmitsLogs {

    /**
     * Logs a emergency record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function emergencyLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::EMERGENCY, $callback, $unit);
    }

    /**
     * Logs a alert record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function alertLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::ALERT, $callback, $unit);
    }

    /**
     * Logs a critical record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function criticalLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::CRITICAL, $callback, $unit);
    }

    /**
     * Logs an error record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function errorLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::ERROR, $callback, $unit);
    }

    /**
     * Logs a warning record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function warningLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::WARNING, $callback, $unit);
    }

    /**
     * Logs a notice record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function noticeLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::NOTICE, $callback, $unit);
    }

    /**
     * Logs an info record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function infoLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::INFO, $callback, $unit);
    }

    /**
     * Logs a debug record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function debugLog(callable $callback, ?string $unit = null): void {

        $this->log(LogLevel::DEBUG, $callback, $unit);
    }

    /**
     * Logs a record.
     * 
     * @internal
     * @since 1.0.0
     * @version 2.0.0
     * 
     * @param LogLevel $level
     * @param callable(): array<string, array> $callback
     * @param ?string $unit
     * @return void
     */
    protected function log(LogLevel $level, callable $callback, ?string $unit = null): void {

        $this->logger?->log($level, $callback, $unit, spl_object_id($this));
    }
}
