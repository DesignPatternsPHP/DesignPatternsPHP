<?php

namespace DesignPatterns\Structural\StateContainer;

class StateContainer
{
    private static $state = null;
    private static $reducer = null;

    public static function init($reducer)
    {
        static::$reducer = $reducer;
        static::$state = null;

        static::$state = call_user_func_array(static::$reducer, array(null, null));
    }

    public static function dispatch($action)
    {
        if (static::$reducer == null) {
            throw new StoreNotInitializedException();
        }

        static::$state = call_user_func_array(static::$reducer, array(static::$state, $action));
    }

    public static function getState()
    {
        return static::$state;
    }
}
