<?php

namespace Logger;

/**
 * Emits log messages.
 * 
 * @api
 * @since 1.1.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
trait EmitsLogs {

    /**
     * Logs a emergency record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function emergencyLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::EMERGENCY,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs a alert record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function alertLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::ALERT,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs a critical record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function criticalLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::CRITICAL,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs an error record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function errorLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::ERROR,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs a warning record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function warningLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::WARNING,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs a notice record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function noticeLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::NOTICE,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs an info record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function infoLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::INFO,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs a debug record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param string $message
     * @param array<string, mixed> $context
     * @param mixed $unit
     * @return void
     */
    protected function debugLog(string $message, array $context = [], ?string $unit = null): void {

        $this->log([
            'level'    => LogLevel::DEBUG,
            'message'  => $message,
            'context'  => $context,
            'unit'     => $unit
        ]);
    }

    /**
     * Logs a record.
     * 
     * @internal
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param array{level: LogLevel, message: string, context: array<string, mixed>, unit: ?string} $record
     * @return void
     */
    protected function log(array $record): void {

        $this->logger?->log([
            'level'    => $record['level'],
            'message'  => $record['message'],
            'context'  => $record['context'] ?? [],
            'unit'     => $record['unit'] ?? null,
            'instance' => spl_object_id($this),
        ]);
    }
}
