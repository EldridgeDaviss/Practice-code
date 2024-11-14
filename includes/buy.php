<?php
// Include the database connection
include('dbh.inc.php');

// Check if the product ID is passed
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Start a transaction to make sure both operations (purchase and stock update) are atomic
    $conn->begin_transaction();

    try {
        // First, fetch the current stock of the product
        $sql = "SELECT stock FROM hogs WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($stock);
        $stmt->fetch();

        if ($stock > 0) {
            // Decrease the stock by 1
            $new_stock = $stock - 1;
            $update_sql = "UPDATE hogs SET stock = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ii", $new_stock, $product_id);
            $update_stmt->execute();

            // Commit the transaction
            $conn->commit();
            echo "Purchase successful! Stock updated.";
        } else {
            echo "Sorry, this product is out of stock.";
        }
    } catch (Exception $e) {
        // Rollback the transaction in case of error
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>