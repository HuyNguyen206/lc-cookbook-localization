<?php

function getCurrentUrlWithLocale($locale)
{
    $segments = request()->segments();
    $segments[0] = $locale;

    return url(implode('/', $segments));
}
