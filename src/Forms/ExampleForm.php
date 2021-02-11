<?php declare(strict_types = 1);

namespace Project\Forms;

final class ExampleForm extends AbstractForm
{

    /**
    * @param array<string,bool|int|float|string|null> $defaultData
    */
    public function __construct(array $defaultData = [])
    {
        parent::__construct(
            [
                'meta' => [
                    'name1' => 'Title1',
                    'name2' => 'Title2',
                ],
                'required' => [
                    'name1',
                ],
                'trim' => [
                    'name1',
                    'name2',
                ],
                'filterNumeric' => [
                    'name2',
                ],
            ],
            $defaultData,
            ['submit'] //$submitFields
        );
    }

    protected function validate(): bool
    {
        parent::validate();

        if (!empty($this->errors)) {
            return false;
        }

        /* custom valdiation */

        return true;
    }
}
