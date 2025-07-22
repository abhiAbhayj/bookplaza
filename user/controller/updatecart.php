<?php
include '../config.php';
$admin=new Admin();
$uid=$_SESSION['uid'];
$cartid=$_GET['cartid'];
$qty=$_GET['qty'];

$stmt=$admin->cud("UPDATE `cart` SET `cart_qty`='$qty' WHERE `cart_id`= '$cartid'","saved");


?>


<div class="container-fluid pt-5" id="tablecart">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        $total=0;
                        $gtotal=0;
                        $stmt = $admin->ret("SELECT * FROM `cart` INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid'");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                            $cqty=$row['cart_qty'];
                            $bprice=$row['book_price'];
                            $total=$bprice*$cqty;
                            $gtotal=$gtotal+$total;
                            ?>
                            <tr>
                                <td class="align-middle"><img src="../seller/controller/<?php echo $row['book_img'] ?>" alt="" style="width: 160px;"> </td>
                                
                                <td class="align-middle">₹<?php echo $row['book_price'] ?></td>
                                <td >
                                    <div class="col" style="display: flex;margin-top:100px">
                                        <button class="btn btn-sm btn-primary" onclick="decrement(<?php echo $row['cart_id'] ?>)">-</button>

                                        <input type="text" id="<?php echo $row['cart_id'] ?>" value="<?php echo $row['cart_qty'] ?>" name="quantity" readonly style="width: 50px;">
                                        <button class="btn btn-sm btn-primary" onclick="increment(<?php echo $row['book_qty'] ?>,<?php echo $row['cart_id'] ?>)">+</button>
                                    </div>
                                </td>
                                <td class="align-middle">₹<?php echo $total ?></td>
                                <td class="align-middle"><a href="controller/deletecart.php?cid=<?php echo $row['cart_id'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                            </tr>
                        <?php }
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                    <?php
                        $total2=0;
                        $gtotal2=0;
                        $stmt2 = $admin->ret("SELECT * FROM `cart` INNER JOIN `book` ON book.book_id=cart.book_id WHERE cart.user_id='$uid'");
                        while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { 
                            $cqty2=$row2['cart_qty'];
                            $bprice2=$row2['book_price'];
                            $total2=$bprice2*$cqty2;
                            $gtotal2=$gtotal2+$total2;
                            ?>
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium"><?php echo $row2['book_title'] ?></h6>
                            <h6 class="font-weight-medium">x<?php echo $row2['cart_qty'] ?></h6>
                            <h6 class="font-weight-medium">₹<?php echo $total2 ?></h6>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₹<?php echo $gtotal2 ?></h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>