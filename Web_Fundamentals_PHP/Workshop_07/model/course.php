<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include '../config.php';

    class course
    {

        public function listcourse()
        {
            $sql = "SELECT * FROM course";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }

        function deletecourse($id)
        {
            $sql = "DELETE FROM course WHERE idcourse = :id";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);

            try {
                $req->execute();
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
    }

    ?>
</body>

</html>