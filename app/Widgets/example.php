<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class example extends BaseDimmer
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
        $count = \App\doubt::count();
        $string = 'Doubt';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-lightbulb',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.user_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'Doubts',
                'link' => route('voyager.doubts.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/doubts.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
