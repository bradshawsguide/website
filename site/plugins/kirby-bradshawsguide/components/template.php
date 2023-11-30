<?php

use Kirby\Cms\App as Kirby;
use Kirby\Cms\Template;

class Indenter extends Template
{
    /**
     * Intent (but don’t sanitise or otherwise manipulate) HTML
     */
    public function render(array $data = []): string
    {
        $kirby = Kirby::instance();
        $html = parent::render($data);
        $indenter = new \Gajus\Dindent\Indenter([
            "indentation_character" => "\t",
        ]);

        // Set element types for custom elements
        $indenter->setElementType(
            "b-icon",
            \Gajus\Dindent\Indenter::ELEMENT_TYPE_INLINE
        );
        $indenter->setElementType(
            "b-locate",
            \Gajus\Dindent\Indenter::ELEMENT_TYPE_INLINE
        );
        $indenter->setElementType(
            "b-map",
            \Gajus\Dindent\Indenter::ELEMENT_TYPE_BLOCK
        );
        $indenter->setElementType(
            "b-toggle",
            \Gajus\Dindent\Indenter::ELEMENT_TYPE_INLINE
        );
        $indenter->setElementType(
            "b-visually-hidden",
            \Gajus\Dindent\Indenter::ELEMENT_TYPE_INLINE
        );

        // Indent HTML
        if ($this->hasDefaultType() === true) {
            $html = $indenter->indent($html);
        }

        return $html;
    }
}

return function (
    Kirby $kirby,
    string $name,
    string $type = "html",
    string $defaultType = "html"
) {
    return new Indenter($name, $type, $defaultType);
};
