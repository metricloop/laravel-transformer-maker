<?php

namespace MetricLoop\TransformerMaker\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeTransformer extends GeneratorCommand
{
    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'make:transformer';

    /**
     * The description.
     *
     * @var string
     */
    protected $description = 'Create a new transformer class';

    /**
     * The type being created.
     *
     * @var string
     */
    protected $type = 'Transformer';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../stubs/transformer.stub';
    }

    /**
     * Get the default namespace for the class
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Transformers';
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param string $stub
     * @param string $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        return str_replace('$dummy', '$' . strtolower($this->getNameInput()), $stub);
    }

    /**
     * Append "Transformer" to name input.
     *
     * @param string $name
     * @return string
     */
    protected function getPath($name)
    {
        return parent::getPath($name . 'Transformer');
    }
}