<?php
/**
 * Express Forms for Craft
 *
 * @package       Solspace:ExpressForms
 * @author        Solspace, Inc.
 * @copyright     Copyright (c) 2019, Solspace, Inc.
 * @link          http://craft.express/forms
 * @license       https://solspace.com/software/license-agreement
 */

namespace Solspace\ExpressForms\utilities\CodePack\Components;

interface ComponentInterface
{
    /**
     * ComponentInterface constructor.
     *
     * @param string $location
     */
    public function __construct(string $location);

    /**
     * Calls the installation of this component
     *
     * @param string $prefix
     */
    public function install(string $prefix = null);
}
