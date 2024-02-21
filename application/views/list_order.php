<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Orders List</title>
</head>

<body>
    <h2>Orders List</h2>
    <!-- <div>
        <form action="<?php echo base_url('orders/search');?>" method="get">
            <input type="text" name="keyword" placeholder="Search by name or room">
            <button type="submit">Search</button>
        </form>
    </div> -->
    <table border="1">
        <tr>
            <!-- <th>Order ID</th> -->
            <th>Room</th>
            <th>Name</th>
            <th>Air Mineral</th>
            <th>Teh Manis Dingin</th>
            <th>Teh Manis Panas</th>
            <th>Kopi Hitam Dingin</th>
            <th>Kopi Hitam Panas</th>
            <th>Kopi Krim Dingin</th>
            <th>Kopi Krim Panas</th>
            <th>Ocha Dingin</th>
            <th>Ocha Panas</th>
            <th>Catatan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($orders as $order) {?>
        <tr>
            <!-- <td><?php echo $order->order_id;?></td> -->
            <td><?php echo $order->room;?></td>
            <td><?php echo $order->name;?></td>
            <td><?php echo $order->menu_mineral_water_qty;?></td>
            <td><?php echo $order->menu_cold_sweet_tea_qty;?></td>
            <td><?php echo $order->menu_hot_sweet_tea_qty;?></td>
            <td><?php echo $order->menu_cold_black_coffee_qty;?></td>
            <td><?php echo $order->menu_hot_black_coffee_qty;?></td>
            <td><?php echo $order->menu_cold_cream_coffee_qty;?></td>
            <td><?php echo $order->menu_hot_cream_coffee_qty;?></td>
            <td><?php echo $order->menu_cold_ocha_qty;?></td>
            <td><?php echo $order->menu_hot_ocha_qty;?></td>
            <td><?php echo $order->notes;?></td>
            <td><?php echo $order->is_finished;?></td>
            <td><?php if (!$order->is_finished) { ?>
                <button class="finish-btn" data-order-id="<?php echo $order->order_id; ?>">Finished</button>
                <?php } else { ?>
                Finished
                <?php } ?>
            </td>
        </tr>
        <?php }?>
    </table>
    <div>
        <?php echo $links;?>
    </div>
</body>

</html>