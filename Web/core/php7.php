<?php

namespace Diman\Openlive\core;

function str_starts_with( $haystack, $needle ) {
     $length = strlen( $needle );
     return substr( $haystack, 0, $length ) === $needle;
}

function str_ends_with($haystack, $needle) {
     $length = strlen($needle);
     return $length > 0 ? substr($haystack, -$length) === $needle : true;
 }