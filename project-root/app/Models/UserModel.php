<?php 
namespace App\Models;
use CodeIgniter\Model;
use DateTime;
use DateTimeZone;
class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
     
    protected $allowedFields = ['id','email', 'name', 'password', 'updated_at', 'uuid'];

    function updatedAt($id) 
    {
       $user = $this->where('id', $id)->first();
       if ($user) {
        $currentTimestamp = $this->db->query("SELECT CURRENT_TIMESTAMP() as `current_time`")->getRow()->current_time;
        $user['updated_at'] = $currentTimestamp;
        $this->save($user);

        return true;
    }
    return false;
    }

    function isVerifyToken($token)
    {
        $user = $this->where('uuid', $token)->first();

        if ($user)
        {
            return true;
        }
        return false;
    }

    function isTokenExpired($token)
    {
        $user = $this->where('uuid', $token)->first();
        
        if ($user) {
            $timezone = new DateTimeZone('Asia/Singapore'); // Replace with your desired timezone
            $currentTimestamp = new DateTime('now', $timezone);
            $updatedTimestamp = new DateTime($user['updated_at'], $timezone);
            $difference = $currentTimestamp->diff($updatedTimestamp);
    
            if ($difference-> i > 60) {
                return true;
            }
        }
        return false;
    }

    // function isSetResetToken($email)
    // {
    //     $user = $this->where('email', $email)->first();
        

    //     if ($user) {
    //         $user['uuid'] = generateToken();
    //         $this->update($user['id'], $user);
        
    //         return true;
    //     }

    //     return false;

    // }

      
    

}