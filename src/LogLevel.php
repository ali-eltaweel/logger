<?php

namespace Logger;

/**
 * Log Level.
 * 
 * @api
 * @since 1.0.0
 * @version 1.0.0
 * @package logger
 * @author Ali M. Kamel <ali.kamel.dev@gmail.com>
 */
enum LogLevel: string {

    /**
     * @since 1.0.0
     */
    case EMERGENCY = 'emergency';

    /**
     * @since 1.0.0
     */
    case ALERT     = 'alert';

    /**
     * @since 1.0.0
     */
    case CRITICAL  = 'critical';

    /**
     * @since 1.0.0
     */
    case ERROR     = 'error';

    /**
     * @since 1.0.0
     */
    case WARNING   = 'warning';

    /**
     * @since 1.0.0
     */
    case NOTICE    = 'notice';
    
    /**
     * @since 1.0.0
     */
    case INFO      = 'info';

    /**
     * @since 1.0.0
     */
    case DEBUG     = 'debug';
}
