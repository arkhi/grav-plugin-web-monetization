<?php
namespace Grav\Plugin;

use Grav\Common\Page\Page;
use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class WebMonetizationPlugin
 *
 * @package Grav\Plugin
 * @see https://webmonetization.org/
 */
class WebMonetizationPlugin extends Plugin
{
    /**
     * @return array
     *
     * Give the core an array of events the plugin listens to. For each event:
     * 1. Key:   Name of the event.
     * 2. Value: array containing:
     *     1. Callable; a named function;
     *     2. Priority; a higher number is a higher priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin.
     */
    public function onPluginsInitialized()
    {
        // Don’t proceed if we are in the admin plugin.
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main events we are interested in.
        $this->enable([
            'onPageInitialized' => ['onPageInitialized', 0],
        ]);
    }

    /**
     * When a Grav Page is initiliazed…
     */
    public function onPageInitialized(Event $e)
    {
        // Get current page object.
        $page = $this->grav['page'];

        // Get current metadata.
        $meta = $page->metadata();

        // Add a meta to the list of metadata if a pointer exists.
        $pointer = $this->config->get('plugins.web-monetization.pointer');

        if ($pointer) {
            $meta['monetization'] = [
                'name'    => 'monetization',
                'content' => $pointer,
            ];

            $page->metadata($meta);
        }
    }
}
