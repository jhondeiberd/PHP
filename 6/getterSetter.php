<?php
/*
 * Methods Getters and Setters
 *  Reasons:
 *      1. Have to access to field without being able to modify
 *      2. Get back the value in different formats. Example: cm, m or CAD, USD
 *      3. Set the values differently
 *          Restrictions.
 *          Different Formats.
 */
class Person {
    private int $age = 34;
    private string $name = "Reza";
    public string $otherName;

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age < 1 || $age > 150) {
            // throw exception.
        }
        $this->age = $age;
    }

    public function setAgeInYears(int $year) {
        $age = date('o') - $year;
        $this->setAge($age);
    }


    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function getAgeInYear() : int {
        return date('o') - $this->age;
    }

    public function getName() : string{
        return $this->name;
    }

}

$reza = new Person();
$reza->otherName = "JOJO";
echo "Other name $reza->otherName <br />";
//echo "name: $reza->name";
echo "name: {$reza->getName()}";
