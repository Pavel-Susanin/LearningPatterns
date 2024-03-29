<?php

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Banana') {
            return "Monkey: I'll eat the " . $request . PHP_EOL;
        } else {
            return parent::handle($request);
        }
    }
}