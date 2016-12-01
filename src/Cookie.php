<?php
namespace azaelcodes\utils\ab;
class Cookie
{
    const COOKIE_PATH = '/';

    public function __construct()
    {
        // Empty
    }

    public static function set($name, $value)
    {
        $expiration = time() + 86400 * 30; /* 86400 = 1 day * 30 = Expire in 30 days */
        setcookie($name, $value, $expiration, self::COOKIE_PATH);
    }

    /**
     * Get the stored Cookie
     * @param $name
     * @return null
     */
    public static function get($name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
    }
}