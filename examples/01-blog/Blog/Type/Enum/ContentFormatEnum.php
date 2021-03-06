<?php
namespace GraphQL\Examples\Blog\Type\Enum;

use GraphQL\Examples\Blog\Type\BaseType;
use GraphQL\Type\Definition\EnumType;

class ContentFormatEnum extends BaseType
{
    const FORMAT_TEXT = 'TEXT';
    const FORMAT_HTML = 'HTML';

    public function __construct()
    {
        $this->definition = new EnumType([
            'name' => 'ContentFormatEnum',
            'values' => [self::FORMAT_TEXT, self::FORMAT_HTML]
        ]);
    }
}
