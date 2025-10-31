<?php

namespace Logger;

use Bitmask\{ Annotations\Bit, Bitmask };

/**
 * Log Level Bitmask.
 * 
 * @api
 * @since 2.0.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
final class LogLevelBitmask extends Bitmask {

    /**
     * @since 1.0.0
     */
    #[Bit('emergency')] public const EMERGENCY = 2 ** 0;

    /**
     * @since 1.0.0
     */
    #[Bit('alert')]     public const ALERT     = 2 ** 1;

    /**
     * @since 1.0.0
     */
    #[Bit('critical')]  public const CRITICAL  = 2 ** 2;

    /**
     * @since 1.0.0
     */
    #[Bit('error')]     public const ERROR     = 2 ** 3;

    /**
     * @since 1.0.0
     */
    #[Bit('warning')]   public const WARNING   = 2 ** 4;

    /**
     * @since 1.0.0
     */
    #[Bit('notice')]    public const NOTICE    = 2 ** 5;

    /**
     * @since 1.0.0
     */
    #[Bit('info')]      public const INFO      = 2 ** 6;

    /**
     * @since 1.0.0
     */
    #[Bit('debug')]     public const DEBUG     = 2 ** 7;

    /**
     * All log levels.
     * 
     * @api
     * @since 1.0.0
     * 
     * @var int ALL
     */
    public const ALL = self::EMERGENCY
                     | self::ALERT
                     | self::CRITICAL
                     | self::ERROR
                     | self::WARNING
                     | self::NOTICE
                     | self::INFO
                     | self::DEBUG;
}
