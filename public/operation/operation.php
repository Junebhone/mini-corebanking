<?php

session_start();

//Session User Function
function loggedIn($username)
{
    if ($username) {
        global $name, $logout;
        $name = $username;
        $logout = true;
    } else {
        header("Location: login.php");
    }
}

//Input Form Error Function
function FormError($input)
{
    if (empty($input)) {
        return "<span class='px-2 text-red-500'>*required</span>";
    }
}



//condition something to output function
function condition($something)
{
    if (isset($something)) {
        echo $something;
    }
}

//select all data function
function selectalldata($con, $table)
{
    $select = "SELECT * FROM $table";
    $query = mysqli_query($con, $select);
    return $query;
}

//select data by ID function
function selectdatabyid($con, $table, $col, $id)
{
    $select = "SELECT * FROM $table where $col= $id";
    $query = mysqli_query($con, $select);
    return mysqli_fetch_array($query);
}

//select data by something
function selectdatabysomething($con, $table, $column, $something)
{
    $select = "SELECT * FROM $table where $column = '$something'";
    $query = mysqli_query($con, $select);
    return mysqli_fetch_array($query);
}

function insert($con, $data, $table)
{

    //initializing variables 
    $columns = "";
    $values = "";


    //foreach looping in array data type and append data into vaiables 
    foreach ($data as $column => $value) {

        $columns .= ($columns == "") ? "" : ", ";

        $columns .= $column;

        $values .= ($values == "") ? "" : ", ";
        $values .= $value;
    }

    $insert = ("INSERT INTO $table ($columns) VALUES ($values)");
    mysqli_query($con, $insert);
}






function update($con, $data, $table, $where, $id)
{
    foreach ($data as $coloum => $value) {
        $update = ("UPDATE $table SET $coloum = $value WHERE $id= '$where'");
        mysqli_query($con, $update);
    }
    return true;
}

function deletedata($con, $table, $where)
{
    $delete = ("DELETE FROM $table WHERE id=$where");
    mysqli_query($con, $delete);
    return true;
}

function selecttwotable($con, $table1, $table2, $id1, $id2)
{

    $select = "SELECT * from $table1 INNER JOIN $table2 on $table1.$id1=  $table2.$id2 ";

    return  mysqli_query($con, $select);
}


function search($con, $table1, $table2, $id1, $id2, $firstname)
{
    $select = "SELECT t1.status as s,  t1.accountID as accountID , t2.FirstName as FirstName , t2.LastName as LastName, t2.NRC as NRC  from $table1 t1 INNER JOIN $table2 t2 on t1.$id1 = t2.$id2 where (t2.FirstName like '%$firstname%' or t2.LastName like '%$firstname%' or t2.NRC like '%$firstname%' or t1.accountID like '%$firstname%')  and t1.status = 'opened'  ";
    return mysqli_query($con, $select);
}


function alert($class, $session)
{
    if (isset($session)) {
        echo "<div class='$class' data-flashdata='$session'></div>";
    }
}


//login function
function login($con, $username, $password)
{

    $row = selectdatabysomething($con, "admin", "name", "$username");

    if ($username == $row['name'] && $password == $row['password']) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        echo "<script>window.alert('successfully logged in')</script>";
        echo "<script>window.location='index.php'</script>";
    } else {
        global $loginError;
        $loginError = "Username Or Password is wrong";
    }
}


// signup function
function signup($con, $data, $table)
{

    insert($con, $data, $table);

    echo "<script>window.alert('successfully signed up)</script>";
    echo "<script>window.location='login.php'</script>";
}