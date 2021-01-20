<?php


class SimpleBookDto {


    public function __construct(
        public string $title,
        public string $author,
        public string $isbn

    ) {
    }
}