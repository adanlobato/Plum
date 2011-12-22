<?php

/*
 * This file is part of the Plum package.
 *
 * (c) 2010-2011 Julien Brochet <mewt@madalynn.eu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plum\Deployer;

use Plum\Server\ServerInterface;

interface DeployerInterface
{
    /**
     * Deploy to the specified server
     *
     * @param Server  The server
     * @param array   Options
     */
    function deploy(ServerInterface $server, array $options = array());

    /**
     * Returns the name of the Deployer
     *
     * @return string
     */
    function getName();
}