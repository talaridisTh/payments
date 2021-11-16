<?php

namespace App\Console\Commands;

use App\Exports\PaymentsExport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Excel;

class ExportCsvCommand extends Command {

    /**
     * @var string
     */
    protected $signature = 'command:export';

    /**
     * @var string
     */
    protected $description = 'Export csv payment';

    /**
     * @return bool|\Illuminate\Foundation\Bus\PendingDispatch
     */
    public function handle()
    {
        return (new PaymentsExport)->store('storage/client.csv', 'local', Excel::CSV);
    }

}
