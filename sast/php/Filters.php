<?php
namespace Config;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf' => CSRF::class
    ];
    public $globals = [
        'before' => [],
        'after' => []
    ];
}
?>
