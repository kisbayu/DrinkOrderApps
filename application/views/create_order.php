<div class="container">
    <div class="card" style="background-color: #AED2FF; margin-top:5rem">
        <div class="card-header" style="background-color: #A9CBF7;">
            <!-- <h5 class="card-title" style="color: #27005D;">Beverages Order</h5> -->
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('order/create'); ?>" method="post">
                <div class="form-group mb-3">
                    <label for="name" style="color: #27005D;">Name *</label>
                    <input type="text" class="form-control" id="name" style="background-color: #E4F1FF;" name="name"
                        placeholder="Name">
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3">
                        Mineral Water
                        <input type="number" class="form-control" id="menu_mineral_water_qty"
                            style="background-color: #E4F1FF;" name="menu_mineral_water_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        Sweet Iced Tea
                        <input type="number" class="form-control" id="menu_cold_sweet_tea_qty"
                            style="background-color: #E4F1FF;" name="menu_cold_sweet_tea_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        Sweet Hot Tea
                        <input type="number" class="form-control" id="menu_hot_sweet_tea_qty"
                            style="background-color: #E4F1FF;" name="menu_hot_sweet_tea_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        Hot Black Coffee
                        <input type="number" class="form-control" id="menu_hot_black_coffee_qty"
                            style="background-color: #E4F1FF;" name="menu_hot_black_coffee_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        Iced Black Coffee
                        <input type="number" class="form-control" id="menu_cold_black_coffee_qty"
                            style="background-color: #E4F1FF;" name="menu_cold_black_coffee_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        Hot Cream Coffee
                        <input type="number" class="form-control" id="menu_hot_cream_coffee_qty"
                            style="background-color: #E4F1FF;" name="menu_hot_cream_coffee_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        Ice Cream Coffee
                        <input type="number" class="form-control" id="menu_cold_cream_coffee_qty"
                            style="background-color: #E4F1FF;" name="menu_cold_cream_coffee_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        Hot Ocha
                        <input type="number" class="form-control" id="menu_hot_ocha_qty"
                            style="background-color: #E4F1FF;" name="menu_hot_ocha_qty" placeholder="0">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        Cold Ocha
                        <input type="number" class="form-control" id="menu_cold_ocha_qty"
                            style="background-color: #E4F1FF;" name="menu_cold_ocha_qty" placeholder="0">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="notes" style="color: #27005D;">Notes</label>
                    <input type="text" class="form-control" id="notes" style="background-color: #E4F1FF;" name="notes"
                        placeholder="Notes">
                </div>

                <button type="submit" class="btn btn-primary mt-3" name="submit" value="save" id="myButton">
                    Create Order</button>
            </form>
        </div>
    </div>
</div>