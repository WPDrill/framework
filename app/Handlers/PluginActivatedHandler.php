<?php

namespace App\Handlers;

use WPDrill\Contracts\InvokableContract;
use WPDrill\DB\Migration\Migrator;

class PluginActivatedHandler implements InvokableContract
{

    private Migrator $migrator;

    public function __construct(Migrator $migrator)
    {
        $this->migrator = $migrator;
    }

	public function __invoke()
    {
        $this->migrator->run();
	}
}
