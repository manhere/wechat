<?php

/**
 * ShopServiceProvider.php.
 *
 * Part of EasyWeChat.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @link      https://github.com/overtrue
 * @link      http://overtrue.me
 */

namespace EasyWeChat\Shop;

use EasyWeChat\Support\ServiceProvider;
use EasyWeChat\Core\Application;

/**
 * Class ShopServiceProvider.
 */
class ShopServiceProvider extends ServiceProvider
{
    /**
     * Register Server.
     *
     * @param Application $app
     *
     * @return mixed|void
     */
    public function register(Application $app)
    {
        $app->bind('store', function ($app) {
            return new Shop($app['http']);
        });
    }
}//end class

