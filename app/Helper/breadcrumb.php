<?php

function generateBreadcrumb($segments)
{
    $breadcrumbs = '<ol class="breadcrumb m-0">';
    $url = url('/');

    foreach ($segments as $s => $urlSegments) {
        $url .= '/' . $urlSegments;
        $isActive = (url()->current() == $url);
        $breadcrumbs .= '<li class="breadcrumb-item' . ($isActive ? ' active' : '') . '">';

        if (!$isActive) {
            $breadcrumbs .= '<a href="' . $url . '">' . $s . '</a>';
        } else {
            $breadcrumbs .= $s;
        }
        $breadcrumbs .= '</li>';
    }
    $breadcrumbs .= '</ol>';

    return $breadcrumbs;
}
