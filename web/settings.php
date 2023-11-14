<?php

class Settings {
    private function __construct() {}

    // Internal paths
    const BASE_PATH = '/var/www/html/';
    const SOURCE_PATH = self::BASE_PATH . 'src/';
    const FILMS_DATABASE = self::BASE_PATH . 'data/films.sqlite';

    // Public-facing paths
    const API_ROOT_PATTERN = '/^\/week5/';
}
