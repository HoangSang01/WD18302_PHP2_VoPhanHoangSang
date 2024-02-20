<?

namespace App\Models;

use App\Models\BaseModels;
use App\Models\Query;

class UserModels extends BaseModels
{
    public $table = 'users';
    public $address = 'province';
    public $tableName = 'users';
    public function read_all_User_Actived()
    {
        return $this->read_all($this->table)->join('roles', 'users.role=roles.id')->join('status', 'users.status=status.id')->where('status', '=', '1')->orderBy('role', 'DESC')->get();
    }
    public function read_all_User_Inactived()
    {
        return $this->read_all($this->table)->join('roles', 'users.role=roles.id')->join('status', 'users.status=status.id')->where('status', '=', '2')->orderBy('role', 'DESC')->get();
    }
    public function checkEmailExist($email)
    {
        return $this->select()->where('email', '=', $email)->first();
    }

    public function checkUserRole($user_id, $role)
    {
        if ($role == 'admin') {
            $role = 2;
            return $this->select()->where('user_id', '=', $user_id)->where('role', '=', '2')->first();
        } else {
            $role = 1;
            return $this->select()->where('user_id', '=', $user_id)->where('role', '=', '1')->first();
        }
    }
    public function checkUserExist($username)
    {
        return $this->select()->where('username', '=', $username)->first();
    }
    public function checkUserId($id)
    {
        return $this->select()->where('user_id', '=', $id)->first();
    }

    public function createUser($data)
    {
        $user = $this->insert($this->table, $data);
    }

    public function read_one_User($user_id)
    {
        return $this->select()->where('user_id', '=', $user_id)->join('status', 'users.status=status.id')->join('roles', 'users.role=roles.id')->first();
    }

    public function hashPassword($password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        return $hashed_password;
    }

    public function update_user_password($user_id, $password)
    {
        $passwordHashed = $this->hashPassword($password);
        $data = array(
            'password' => $passwordHashed
        );
        $condition = "user_id = $user_id";
        return $this->updateData($this->table, $data, $condition);
    }

    public function update_user_info($user_id, $data)
    {
        $condition = "user_id = $user_id";
        return $this->updateData($this->table, $data, $condition);
    }

    public function update_user_status($user_id, $status)
    {
        if ($status == 'active') {
            $data = array(
                'status' => 1
            );
        } else {
            $data = array(
                'status' => 2
            );
        }
        $condition = "user_id = $user_id";
        return $this->updateData($this->table, $data, $condition);
    }

    public function read_one_activity($user_id, $activity)
    {
        return $this->table('activities')->select()->where('uid', '=', $user_id)->whereLike('activity', $activity)->first();
    }
    public function read_all_activity($user_id)
    {
        return $this->table('activities')->select()->where('uid', '=', $user_id)->get();
    }

    public function user_activity($uid, $activity)
    {
        $date = date('Y-m-d H:i:s');
        $checkActivity = $this->table('activities')->select()->where('uid', '=', $uid)->whereLike('activity', $activity)->first();
        if ($checkActivity) {
            $data = array(
                'activity_time' => "'$date'"
            );
            $condition = "activity_id = " . $checkActivity['activity_id'];
            return $this->updateData('activities', $data, $condition);
        } else {
            $data = array(
                'uid' => $uid,
                'activity' => $activity,
                'activity_time' => $date
            );
            return $this->insert('activities', $data);
        }
    }
}
