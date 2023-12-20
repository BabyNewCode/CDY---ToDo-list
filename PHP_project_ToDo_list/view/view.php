<?php

class View {
    public function render($template, $data) {
        require_once __DIR__.'/../../public/'.$template;
    }
}
