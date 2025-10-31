<?php

namespace Logger\Driver;

use Logger\{ LogLevel, LogLevelBitmask, LogRecord };

use Closure;

/**
 * Abstract Logger Driver.
 * 
 * @api
 * @abstract
 * @since 2.0.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
abstract class Driver implements IDriver {

    /**
     * Creates a new log driver.
     * 
     * @api
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param LogLevelBitmask|int|string $level The accepted log levels.
     */
    public function __construct(protected LogLevelBitmask|int|string $level = LogLevelBitmask::ALL) {

        $this->level = $level instanceof LogLevelBitmask ? $level : new LogLevelBitmask($level);
    }

    /**
     * Checks if the driver accepts a log with the given level, unit, and instance.
     * 
     * @api
     * @override
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param LogLevel $level
     * @param ?string $unit
     * @param ?string $instance
     * @return void
     */
    public function accept(LogLevel $level, ?string $unit, ?string $instance): bool {

        return $this->level->has($level->value);
    }

    /**
     * Creates a new log driver from a callable.
     * 
     * @api
     * @final
     * @static
     * @since 1.0.0
     * @version 1.0.0
     * 
     * @param LogLevelBitmask|int|string $level The accepted log levels.
     * @param Closure(LogRecord): void $log The log callable.
     * @return static
     */
    public static final function fromCallable(LogLevelBitmask|int|string $level, Closure $log): static {

        return new class($level, $log) extends Driver {

            public function __construct(LogLevelBitmask|int|string $level, private Closure $log) {

                parent::__construct($level);
            }

            public function log(LogRecord $record): void {

                ($this->log)($record);
            }
        };
    }
}
