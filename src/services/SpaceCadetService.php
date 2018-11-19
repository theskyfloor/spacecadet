<?php
/**
 * Space Cadet plugin for Craft CMS 3.x
 *
 * a field for padding and margin in a page builder
 *
 * @link      http://www.theskyfloor.com
 * @copyright Copyright (c) 2018 Alan Miller
 */

namespace theskyfloor\spacecadet\services;

use theskyfloor\spacecadet\SpaceCadet;

use Craft;
use craft\base\Component;

/**
 * SpaceCadetService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Alan Miller
 * @package   SpaceCadet
 * @since     1.0.0
 */
class SpaceCadetService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     SpaceCadet::$plugin->spaceCadetService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
