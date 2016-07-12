<?php

namespace Themsaid\Langman\Commands;

use Illuminate\Console\Command;
use Themsaid\Langman\Manager;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'langman:import {path}';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $description = 'Import translation from given path';

    /**
     * The name of the language file we're going to alter.
     *
     * @var string
     */
    protected $fileName;

    /**
     * The name of the package.
     *
     * @var string
     */
    protected $packageName;

    /**
     * The name of the only language we're going to alter its file.
     *
     * @var null|string
     */
    protected $languageKey;

    /**
     * The name of the key we're going to update or create.
     *
     * @var string
     */
    protected $key;

    /**
     * The Languages manager instance.
     *
     * @var \Themsaid\LangMan\Manager
     */
    private $manager;

    /**
     * Array of requested file in different languages.
     *
     * @var array
     */
    protected $files;

    /**
     * ListCommand constructor.
     *
     * @param \Themsaid\LangMan\Manager $manager
     * @return void
     */
    public function __construct(Manager $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }

}
