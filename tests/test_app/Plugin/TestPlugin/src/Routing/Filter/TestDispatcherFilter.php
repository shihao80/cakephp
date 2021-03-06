<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         2.2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace TestPlugin\Routing\Filter;

use Cake\Event\Event;
use Cake\Routing\DispatcherFilter;

/**
 * TestDispatcherFilter
 */
class TestDispatcherFilter extends DispatcherFilter
{

    public function beforeDispatch(Event $event)
    {
        $event->data('request')->params['altered'] = true;
    }

    public function afterDispatch(Event $event)
    {
        $event->data('response')->statusCode(304);
    }
}
