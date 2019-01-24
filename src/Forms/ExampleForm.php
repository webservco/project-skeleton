<?php
namespace Project\Forms;

final class ExampleForm extends AbstractForm
{
    public function __construct($defaultData = [])
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

    protected function validate()
    {
        parent::validate();

        if (!empty($this->errors)) {
            return false;
        }

        /* custom valdiation */

        return true;
    }
}
