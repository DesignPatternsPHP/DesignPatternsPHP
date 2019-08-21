<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

class ConcreteMediator implements Mediator
{
    /**
     * @var Subsystem\Server
     */
    private $server;

    /**
     * @var Subsystem\Database
     */
    private $database;

    /**
     * @var Subsystem\Client
     */
    private $client;

    public function __construct(Subsystem\Database $database, Subsystem\Client $client, Subsystem\Server $server)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

    public function sendResponse(string $content)
    {
        $this->client->output($content);
    }
}
