<?php

namespace PjbServer\Tools\System;

use PjbServer\Tools\Exception;

interface ProcessInterface
{


    /**
     * Kill a process
     *
     * @throws Exception\InvalidArgumentException
     * @param int $pid
     * @param bool $wait
     * @return boolean
     */
    public function kill($pid, $wait=false);

    /**
     * Check whether a pid is running
     *
     * @throws Exception\InvalidArgumentException
     * @param int $pid
     * @return boolean
     */
    public function isRunning($pid);
}
