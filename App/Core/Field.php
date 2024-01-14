<?

namespace App\Core;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASS = 'pass';
    public const TYPE_NUM = 'num';

    public string $type;

    public string $attribute;

    public function __construct(string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '
            <div class="form-group">
                <label>%s</label>
                <input type="%s" name="%s">
            </dv>',
            $this->getLabel($this->attribute),
            $this->type,
            $this->attribute
        );
    }

    public function getLabel($attribute)
    {
        return $this->labels()[$attribute] ?? $attribute;
    }

    public function labels(): array
    {
        return [
            'firstname' => 'FIRST NAME',
            'lastname' => 'LAST NAME',
            'email' => 'EMAIL',
            'password' => 'PASSWORD',
            'confirmpassword' => 'CONFIRM PASSWORD',

        ];
    }
    public function passwordField()
    {
        $this->type = SELF::TYPE_PASS;
        return $this;
    }
}
