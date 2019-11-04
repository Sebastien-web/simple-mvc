<?php

namespace App\Service;

class CategoryValidator
{
    public function validateCategory(array $category)
    {
        $errors = [];
        if (!isset($category["name"]) || empty($category["name"])) {
            $errors["name"] = "please enter category name";
        }
        if (!isset($category["description"]) || empty($category["description"])) {
            $errors["description"] = "please enter category description";
        }
        return $errors;
    }
}