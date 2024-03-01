<?

use App\Models\UserModels;

$userModels = new UserModels();
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $searchResults = $userModels->search_user($keyword);
    if ($searchResults) {
        echo json_encode($searchResults);
    } else {
        echo json_encode(['error' => 'Không tìm thấy kết quả']);
    }
} else {
    echo json_encode(['error' => 'Từ khoá không được cung cấp']);
}
