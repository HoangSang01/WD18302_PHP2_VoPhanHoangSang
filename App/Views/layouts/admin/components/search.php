<?

use App\Models\UserModels;

$userModels = new UserModels;
$keyword = 'sang';
$search = $userModels->search_user($keyword);
var_dump($search);
echo json_encode($search);
