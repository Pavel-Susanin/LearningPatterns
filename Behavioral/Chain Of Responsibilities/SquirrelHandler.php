<?php

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Nut') {
            return "Squirrel: I'll eat the " . $request . PHP_EOL;
        } else {
            return parent::handle($request);
        }
    }
}