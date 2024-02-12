<?php

namespace App\Widgets;

use App\Models\WEDOAPP\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class Services extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Service::count();
        $string = 'Services';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-bag',
            'title' => "{$count} {$string}",
            'text' => __('Services', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Services',
                'link' => route('voyager.services.index'),
            ],
            'image' => asset('assets/products.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
