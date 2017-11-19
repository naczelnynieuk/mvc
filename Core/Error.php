<?php
/**
 * User: nieuk
 * Date: 19.11.2017
 * Time: 18:44
 */

namespace Core;


class Error
{
    public static function errorHandler($level, $message, $file, $line)
    {
        if (error_reporting() !== 0) {
            throw new \Exception($message, 0, $level, $line);
        }
    }

    public static function  exceptionHandler($exception)
    {
        if (\App\Config::SHOW_ERRORS) {
            echo '<h1>Fatal error</h1>';
            echo '<p>Uncaught exception: </p>'. get_class($exception) . '</p>';
            echo '<p>Message: ' . $exception->getMessage() . '</p>';
            echo '<p>Stack trace: <pre>' . $exception->getTraceAsString() . '</pre></p>';
            echo '<p>Throw in: ' . $exception->getFile() . ' on line ' . $exception->getLine()  . '</p>';
        } else {
            $log = dirname(__DIR__) . '/logs/' . date('Y-m-d') . '.txt';
            ini_set('error_log', $log);
            $message =  'Uncaught exception: </p>'. get_class($exception);
            $message .= ' with message '. $exception->getMessage();
            $message .= '\nStack trace:' . $exception->getTraceAsString();
            $message .= 'Throw in: ' . $exception->getFile() . ' on line ' . $exception->getLine();

            error_log($message);
            echo "<h1> An error occured </h1>";

        }
    }
}