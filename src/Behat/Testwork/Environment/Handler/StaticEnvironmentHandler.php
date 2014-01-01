<?php

/*
 * This file is part of the Behat Testwork.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Testwork\Environment\Handler;

use Behat\Testwork\Environment\Environment;
use Behat\Testwork\Environment\StaticEnvironment;
use Behat\Testwork\Suite\Suite;

/**
 * Static test environment handler.
 *
 * Environment handler based on static calls (no isolation).
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class StaticEnvironmentHandler implements EnvironmentHandler
{
    /**
     * Checks if handler supports provided suite.
     *
     * @param Suite $suite
     * @param mixed $subject
     *
     * @return Boolean
     */
    public function supportsSuiteAndSubject(Suite $suite, $subject = null)
    {
        return true;
    }

    /**
     * Builds environment object based on provided suite.
     *
     * @param Suite $suite
     * @param mixed $subject
     *
     * @return Environment
     */
    public function buildEnvironment(Suite $suite, $subject = null)
    {
        return new StaticEnvironment($suite->getName());
    }

    /**
     * Checks if handler supports provided environment.
     *
     * @param Environment $environment
     *
     * @return Boolean
     */
    public function supportsEnvironment(Environment $environment)
    {
        return $environment instanceof StaticEnvironment;
    }

    /**
     * Isolates provided environment.
     *
     * @param Environment $environment
     *
     * @return Environment
     */
    public function isolateEnvironment(Environment $environment)
    {
        return $environment;
    }
}
