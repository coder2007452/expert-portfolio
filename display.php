<head>
    <title>User Details`</title>
    <style>
        /* Page Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Title Styling */
.table-title {
    font-size: 24px;
    color: #333;
    margin-top: 30px;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Table Styling */
table {
    width: 80%; /* Set table width */
    margin: 20px auto; /* Center the table */
    border-collapse: collapse; /* Remove space between borders */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
}

th, td {
    padding: 12px; /* Add padding inside table cells */
    text-align: center; /* Align text to the left */
    border: 1px solid #ddd; /* Add border around cells */
}

th {
    background-color: #ff6600; /* Set background color for table headers */
    color: white; /* Set text color of table headers */
    font-weight: bold; /* Make table header text bold */
}

td {
    background-color: #fff; /* Set background color for table data */
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Light grey background for even rows */
}

tr:hover {
    background-color: #f5f5f5; /* Highlight row on hover */
}

/* No Records Styling */
.no-records {
    font-size: 18px;
    color: #ff6600;
    text-align: center;
    padding: 20px;
    font-weight: bold;
}

    </style>
</head>

<?php
include("connect.php"); // Ensure this file contains your database connection
error_reporting(0); // Suppress minor errors (optional, not recommended in production)

$query = "SELECT * FROM FORM"; // Replace 'FORM' with your actual table name
$data = mysqli_query($conn, $query);

if (!$data) {
    die("Query Failed: " . mysqli_error($conn)); // Check if the query was successful
}

$total = mysqli_num_rows($data); // Total number of rows returned

if ($total > 0) {
    ?>
    <h2 class="table-title">Details Of User</h2> <!-- Title above the table -->
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    <?php
    // Iterate over each record
    while ($result = mysqli_fetch_assoc($data)) {
        // Use array keys properly with quotes
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['username']."</td>
                <td>".$result['email']."</td>
                <td>".$result['pass']."</td>
            </tr>";
    }
    ?>
    </table>
<?php
} else {
    echo "<p class='no-records'>NO RECORDS</p>";
}
?>
