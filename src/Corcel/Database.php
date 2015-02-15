<?php

/**
 * Corcel\Database
 *
 * @author Junior Grossi <juniorgro@gmail.com>
 */

namespace Corcel;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    /**
     * Base params. Wordpress use by default MySQL databases and more.
     */

    /**
     * Connect to the Wordpress database
     *
     * @param array $params
     */
    public static function connect($params = ['prefix' => 'wp_'])
    {
        $capsule = new Capsule;
        $params = array_merge(\Config::get('database.connections.mysql'), $params);
        $capsule->addConnection($params);
        $capsule->bootEloquent();
    }
}

