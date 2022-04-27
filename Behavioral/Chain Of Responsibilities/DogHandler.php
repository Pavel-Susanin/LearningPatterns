<?php

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Meatball') {
            return "Dog: I'll eat the " . $request . PHP_EOL;
        } else {
            return parent::handle($request);
        }
    }
}