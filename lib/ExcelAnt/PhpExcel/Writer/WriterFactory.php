<?php

namespace ExcelAnt\PhpExcel\Writer;

use ExcelAnt\PhpExcel\Writer\Worker\WorkerFactory;

class WriterFactory
{
    private $workerFactory;

    public function __construct()
    {
        $this->workerFactory = new WorkerFactory();
    }

    public function createWriter()
    {
        return new Writer($this->workerFactory->createTableWorker(), $this->workerFactory->createCellWorker(), $this->workerFactory->createStyleWorker());
    }
}