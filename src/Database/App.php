<?php

namespace AndreusTimm\PHPUnit\Database;

use \Phormium\DB;

class App
{
    private $config;

    /**
     * App constructor.
     * @param array $config
     */
    public function __construct(array $config = null)
    {
        if (empty($config)) {
            $this->setConfigEnvFile();
            $config = [
                "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            ];
        }

        $this->config = $config;

        list($dsn, $user, $pass) = $this->config;

        DB::configure([
            'databases' => [
                'phpunit_test' => [
                    'dsn' => $dsn,
                    'username' => $user,
                    'password' => $pass
                ]
            ]
        ]);
    }

    private function setConfigEnvFile(string $envFile = null)
    {
        $file = $envFile ?? __DIR__ . '/../Config/.env';
        $envs = parse_ini_file($file);

        foreach ($envs as $key => $value) {
            $_ENV[$key] = $value;
        }
    }

    public function readPersons()
    {
        return Person::objects()->fetch();
    }
}