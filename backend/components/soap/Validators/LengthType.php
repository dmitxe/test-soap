<?php
namespace backend\components\soap\Validators;

/**
 * Length == alias for StringType, needs to exists because of the simple matching we do for validatortype -> this class
 */
class LengthType extends StringType
{

}
