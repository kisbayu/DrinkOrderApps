 <h2>Orders List</h2>

 <table class="table table-striped">
     <thead class="thead-dark">
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
     </thead>

     <tbody>
         <?php foreach ($orders as $order):?>
         <tr>
             <td><?= $order['room']?></td>
             <td><?= $order['name']?></td>
             <td><?= $order['menu_mineral_water_qty']?></td>
             <td><?= $order['menu_cold_sweet_tea_qty']?></td>
             <td><?= $order['menu_hot_sweet_tea_qty']?></td>
             <td><?= $order['menu_cold_black_coffee_qty']?></td>
             <td><?= $order['menu_hot_black_coffee_qty']?></td>
             <td><?= $order['menu_cold_cream_coffee_qty']?></td>
             <td><?= $order['menu_hot_cream_coffee_qty']?></td>
             <td><?= $order['menu_cold_ocha_qty']?></td>
             <td><?= $order['menu_hot_ocha_qty']?></td>
             <td><?= $order['notes']?></td>
             <td><?= $order['is_finished'] ? 'Finished' : 'Progress' ?></td>
             <td>
                 <?php if (!$order['is_finished']): // Check if is_finished is false ?>
                 <button onclick="location.href='<?= base_url("finish_order/{$order['order_id']}") ?>'"
                     class="btn btn-success">Finish</button>
                 <?php endif; ?>
             </td>
         </tr>
         <?php endforeach; ?>
     </tbody>
 </table>

 <?= $this->pagination->create_links(); ?>