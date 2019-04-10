<?php

namespace App\Providers;

use App\Events\OrderReviewed;
use App\Listeners\UpdateProductRating;
use App\Listeners\SendOrderPaidMail;
use App\Events\OrderPaid;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        OrderPaid::class => [
            UpdateProductSoldCount::class,
            SendOrderPaidMail::class,
        ],
        Registered::class => [
            RegisteredListener::class,
        ],
        OrderReviewed::class => [
            UpdateProductRating::class,
        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // add your listeners (aka providers) here
        'SocialiteProviders\Weixin\WeixinExtendSocialite@handle'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
