<?php
if (! function_exists('stoke_view')) {
    /**
     * Returns a new displayable view based on the configured backpack view namespace.
     * If that view doesn't exist, it will load the one from the original theme.
     *
     * @param string (see config/backpack/base.php)
     *
     * @return string
     */
    function stoke_view($view)
    {
        $originalTheme = 'crud::';
        $pos = strpos($view, $originalTheme);
        if ($pos !== false) {
            $view = str_replace($originalTheme, '', $view);
        }

        $theme = 'stoke-crud::';

        if (is_null($theme)) {
            $theme = $originalTheme;
        }

        $returnView = $theme.$view;

        if (! view()->exists($returnView)) {
            $returnView = $originalTheme.$view;
        }

        return $returnView;
    }
}

