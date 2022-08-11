<?php


include "./operation/connect.php";
include "./operation/operation.php";



$select = "SELECT * from account a inner join customer c on a.customerID = c.customerID where a.status='opened'";
$query = mysqli_query($con, $select);

if (isset($_POST['accountID'])) {
    $accountID = $_POST['accountID'];
    $select = "SELECT * from account inner join customer on account.customerID = customer.customerID where accountID like '%$accountID%' and account.status = 'opened'";
    $query = mysqli_query($con, $select);
};

$heading = '<h4 class="text-xl font-bold">Transfer From</h4><svg
class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor"
viewBox="0 0 20 20">
<path fill-rule="evenodd"
    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
    clip-rule="evenodd"></path>
</svg>';




while ($result = mysqli_fetch_array($query)) {

    $table .= " <div class='flex  rounded-md justify-between border-grey-light border  bg-white'>
    <div class='p-4'>
        <div>
            <label class='text-lg font-medium'>UserName:</label>
            <span>" . $result['FirstName'] . $result['LastName'] . "</span>
        </div>
        <div>
            <label class='text-lg font-medium'>AccountID:</label>
            <span>" . $result['accountID'] . "</span>
        </div>
    </div>
    <div class='flex'>
        <button class='select2 bg-green-600 text-white p-4 rounded-r-md' data-id=" . "'" . $result['accountID'] . "'" . ">Select</button>
    </div>
</div>";
}




echo $t = $heading . '|' . $table;