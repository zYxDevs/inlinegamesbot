<?php
/**
 * Inline Games - Telegram Bot (@inlinegamesbot)
 *
 * (c) 2017 Jack'lul <jacklulcat@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

/**
 * Default configuration
 *
 * This configuration array is compatible with Telegam Bot Manager's format
 */
$config = [
    'api_key'      => getenv('BOT_TOKEN'),
    'bot_username' => getenv('BOT_USERNAME'),
    'secret'       => getenv('BOT_SECRET'),
    'admins'       => [(integer) getenv('BOT_ADMIN') ?: 0],
    'commands' => [
        'paths' => [
            SRC_PATH . '/Command',
        ],
        'configs' => [
            'report' => [
                'dirs_to_report' => [
                    VAR_PATH . '/logs',
                    VAR_PATH . '/crashdumps'
                ]
            ],
            'clean' => [
                'clean_interval' => 86400,
            ],
        ],
    ],
    'webhook' => [
        'url'             => getenv('BOT_WEBHOOK'),
        'max_connections' => 20,
        'allowed_updates' => [
            'message',
            'inline_query',
            'chosen_inline_result',
            'callback_query',
        ],
    ],
    'mysql' => [
        'host'     => getenv('DB_HOST'),
        'user'     => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
        'database' => getenv('DB_NAME'),
    ],
    'logging' => [
        'error'  => VAR_PATH . '/logs/Error.log',
    ],
    'validate_request' => true,
    'botan' => [
        'token'   => getenv('BOTAN_TOKEN'),
        'options' => [
            'timeout' => 5,
        ],
    ],
    'cron' => [
        'groups' => [
            'default' => [
                '/report',
                '/clean',
            ],
        ],
    ],
];
