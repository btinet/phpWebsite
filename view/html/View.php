<?php

namespace view\html;

class View
{

    public function begin(string $element, array $attributes = []): View
    {
        foreach ($attributes as $attribute => $value) {
            $element .= " $attribute='$value'";
        }
        echo "<$element>";
        return $this;
    }

    public function end(string $element): View
    {
        echo "</$element>";
        return $this;
    }

    public function write($text): View
    {
        echo $text;
        return $this;
    }

}