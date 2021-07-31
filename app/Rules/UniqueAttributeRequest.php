<?php

namespace App\Rules;

use App\Models\Attribute;
use Illuminate\Contracts\Validation\Rule;

class UniqueAttributeRequest implements Rule
{

    private $attributeName;
    private $attributeId;
    private $attributeDepartment;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($attributeName, $attributeDepartment, $attributeId)
    {
        $this->attributeId = $attributeId;
        $this->attributeName = $attributeName;
        $this->attributeDepartment = $attributeDepartment;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $attribute = Attribute::where('name', $value)
            ->where('department_id', $this->attributeDepartment)->first();
        if ($attribute)
            return false;
        else
            return true;


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ' this name already exists  before';
    }
}
