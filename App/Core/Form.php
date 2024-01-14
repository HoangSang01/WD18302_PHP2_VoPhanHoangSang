<?

namespace App\Core;

class Form
{
    public static function begin($action, $method)
    {
        echo printf('<form action="%s" method="%s"', $action, $method);
        return new Form();
    }
    public static function end()
    {
        return '</form>';
    }

    public function field($attribute)
    {
        return new Field($attribute);
    }
}
