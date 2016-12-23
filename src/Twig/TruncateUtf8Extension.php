<?php

namespace Drupal\truncate_utf8\Twig;

use Drupal\Component\Utility\Unicode;


/**
 * Class TruncateUtf8Extension

 * @package Drupal\truncate_utf8\Twig
 */
class TruncateUtf8Extension extends \Twig_Extension {
    /**
     * {@inheritdoc}
     */
    public function getName() {
        return 'truncate_utf8';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions() {
        return [
            new \Twig_SimpleFunction('truncate_utf8', [$this, 'truncateUtf8'], [
                'is_safe' => ['html'],
            ]),
        ];
    }

    public function truncateUtf8($string, $max_length, $wordsafe = FALSE, $add_ellipsis = FALSE, $min_wordsafe_length = 1) {
        return Unicode::truncate($string, $max_length, $wordsafe, $add_ellipsis, $min_wordsafe_length);
    }
}