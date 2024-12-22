<?php

class Validation
{
  private $errors = [];

  public static function validate($fieldsToValidate, $form)
  {
    $validation = new self;

    foreach ($fieldsToValidate as $field => $rules) {
      $value = $form[$field];

      foreach ($rules as $rule) {
        $validation->$rule($field, $value);
      }
    }

    return $validation;
  }


  public function rejected()
  {
    if (count($this->errors) > 0) {
      flash()->set('error', $this->errors, 'error');

      return true;
    }
  }

  public function required(string $field, string $value)
  {
    if (strlen($value) === 0) {
      $this->errors[] = [
        'name' => "{$field}_error",
        'message' => 'Campo obrigatório'
      ];
    }
  }

  public function email(string $field, string $value)
  {
    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
      $this->errors[] = [
        'name' => "{$field}_error",
        'message' => 'E-mail inválido'
      ];
    }
  }
}
