<?php
    session_start();
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']))
    {
        $data = file_get_contents('../model/admin.json');
        $myJSON = json_decode($data, true);

        foreach($myJSON as $key=>$user)
        {
            if($user['id'] == $_SESSION['id'])
            {
                $myJSON[$key]['fullname'] = $_POST['name'];
                $myJSON[$key]['email'] = $_POST['email'];
                $myJSON[$key]['phone'] = $_POST['phone'];
                $myJSON[$key]['dateOfBirth'] = $_POST['dob'];

                $newJSON = json_encode($myJSON);
                file_put_contents('../model/admin.json', $newJSON);
            }
        }

        echo "Success";
    }
?>