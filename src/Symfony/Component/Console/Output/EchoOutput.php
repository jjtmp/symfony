<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Jonas Bechtel <msg@jbechtel.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Output;

/**
 * EchoOutput writes the output using the common php echo command.
 */
class EchoOutput extends Output {
    
    /**
     * {@inheritdoc}
     */
    protected function doWrite($message, $newline) {
        if ($newline) {
                echo $message . PHP_EOL;
        } else {
                echo $message;
        }
    }
}

