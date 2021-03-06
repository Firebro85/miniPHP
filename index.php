<?php
require_once('dbconfig.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>پروژه عملی</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container border p-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="p-3 pt-5">TopLearn.com</h3>
                <hr />
                <a href="#"><button class="btn btn-primary font-16 m-3">وارد کردن رکورد</button></a>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered table-striped m-2">
                        <thead>
                            <th>شناسه</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>شماره</th>
                            <th>آدرس</th>
                            <th>تاریخ ساخت</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'SELECT * FROM users';
                            $query = $conn->prepare($sql);
                            $query -> execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            ?>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    حسن
                                </td>
                                <td>
                                    خسروجردی
                                </td>
                                <td>
                                    hassankhosrojerdi@yahoo.com
                                </td>
                                <td>
                                    0987654321
                                </td>
                                <td>
                                    پاسداران میدان هروی کوچه اول پلاک ۳
                                </td>
                                <td>
                                    2020/02/21
                                </td>

                                <td><a href="#"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button></a></td>

                                <td><a href="#"><button class="btn btn-danger" onClick="return confirm('آیا حذف انجام شود');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>