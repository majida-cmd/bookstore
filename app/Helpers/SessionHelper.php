<?

namespace App\Helpers;

use Illuminate\Support\Str;

class SessionHelper
{
    public static function generate_unique_session_id()
    {
        return Str::uuid();
    }
}
