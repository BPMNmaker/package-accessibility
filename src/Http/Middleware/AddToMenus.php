<?php

namespace ProcessMaker\Package\Accessibility\Http\Middleware;

use Closure;
use Lavary\Menu\Facade as Menu;

class AddToMenus
{
    public function handle($request, Closure $next)
    {
        // Add a menu option to the top to point to our page

        $menu = Menu::get('topnav');
        $menu->add(__('Skeleton'), ['route' => 'package.accessibility.tab.index']);

        // Add a option in the admin menu to point to our page
        $menu = Menu::get('sidebar_admin')->first();

        // Add our menu item to the top nav
        $menu->add(__('Skeleton'), [
            'route' => 'package.accessibility.index',
            'icon' => 'fa-puzzle-piece',
        ]);

        return $next($request);
    }
}
