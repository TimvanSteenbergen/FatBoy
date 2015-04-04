<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 27-3-2015
 * Time: 17:31
 */
namespace Debug\Service;

class Timer
{
    /**
     * @var array
     */
    protected $start;

    /**
     * @var boolean
     */
    protected $timeAsFloat;

    public function __construct($timeAsFloat = false)
    {
        $this->timeAsFloat = $timeAsFloat;
    }

    public function start($key)
    {
        $this->start[$key] = microtime($this->timeAsFloat);
    }

    public function stop($key)
    {
        if (!isset($this->start[$key])) {
            $result = null;
        } else {
            $result = microtime($this->timeAsFloat) - $this->start[$key];
        }
        return $result;
    }
}
