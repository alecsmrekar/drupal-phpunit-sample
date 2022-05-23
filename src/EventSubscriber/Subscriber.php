<?php

namespace Drupal\test_module\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * An event subscriber.
 */
class Subscriber implements EventSubscriberInterface {

    /**
     * A method.
     *
     * @param \Symfony\Component\HttpKernel\Event\ResponseEvent $event
     *   The event to process.
     */
    public function onResponse(ResponseEvent $event): void {
        $test = 123;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents() {
        $events = [];
        $events[KernelEvents::RESPONSE][] = ['onResponse', -256];
        return $events;
    }

}
