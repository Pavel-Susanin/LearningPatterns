<?php

class DatabaseConnection
{
    public function __construct(private DatabaseConfiguration $configuration)
    {
    }

    public function getDns(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}