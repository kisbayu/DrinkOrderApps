<div class="container">
    <div class="card" style="background-color: #AED2FF; margin-top:1rem; border: 0;">
        <div class="card-body" style="background-color: #F0F3FF; ">
            <form action=" <?php echo base_url('order/create'); ?>" method="post">
                <!-- <div class="form-group mb-3"> -->
                <!-- <label for="room" style="color: #27005D;">Room *</label> -->
                <input type="number" class="form-control" id="room" style="background-color: #E4F1FF;" name="room"
                    value="<?php echo isset($room_number) ? $room_number : 1; ?>" readonly hidden>
                <!-- </div> -->
                <div class="form-group mb-3">
                    <!-- <label for="name" style="color: #27005D;">Name *</label> -->
                    <input type="text" class="form-control" id="name"
                        style="background-color: #FFFFFF; border-radius: 0.7rem" name="name" placeholder="Name">
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/mineral_water_2.jpg'); ?>" class="img-fluid"
                                alt="Mineral Water" style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Mineral Water</div>
                                <input type="number" class="form-control" id="menu_mineral_water_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_mineral_water_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/iced_tea.jpg'); ?>" class="img-fluid" alt="Mineral Water"
                                style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Sweet Iced Tea</div>
                                <input type="number" class="form-control" id="menu_cold_sweet_tea_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_cold_sweet_tea_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/hot_tea.jpg'); ?>" class="img-fluid" alt="Mineral Water"
                                style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Sweet Hot Tea</div>
                                <input type="number" class="form-control" id="menu_hot_sweet_tea_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_hot_sweet_tea_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/hot_black_coffee.jpg'); ?>" class="img-fluid"
                                alt="Mineral Water" style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Hot Black Coffee</div>
                                <input type="number" class="form-control" id="menu_hot_black_coffee_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_hot_black_coffee_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/iced_black_coffee.jpg'); ?>" class="img-fluid"
                                alt="Mineral Water" style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Iced Black Coffee</div>
                                <input type="number" class="form-control" id="menu_cold_black_coffee_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_cold_black_coffee_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/hot_cream_coffee.jpg'); ?>" class="img-fluid"
                                alt="Mineral Water" style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Hot Cream Coffee</div>
                                <input type="number" class="form-control" id="menu_hot_cream_coffee_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_hot_cream_coffee_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/iced_cream_coffee.jpg'); ?>" class="img-fluid"
                                alt="Mineral Water" style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Iced Cream Coffee</div>
                                <input type="number" class="form-control" id="menu_cold_cream_coffee_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;"
                                    name="menu_cold_cream_coffee_qty" placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/hot_ocha.jpg'); ?>" class="img-fluid" alt="Mineral Water"
                                style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Hot Ocha</div>
                                <input type="number" class="form-control" id="menu_hot_ocha_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;" name="menu_hot_ocha_qty"
                                    placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3">

                        <div class="card" style="background-color:#f5f6fa; border-radius: 1.2rem;">
                            <img src="<?= base_url('/public/cold_ocha.jpg'); ?>" class="img-fluid" alt="Mineral Water"
                                style="border-radius: 1.2rem;">
                            <div class="card-body">
                                <div class="h5 mb-3">Cold Ocha</div>
                                <input type="number" class="form-control" id="menu_cold_ocha_qty"
                                    style="background-color: #FFFFFF; border-radius: 0.7rem;" name="menu_cold_ocha_qty"
                                    placeholder="0" min="0">
                                <a href="#" class="add-notes mt-2" style="display:block; color: #b9bcc7;">Add notes</a>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-block btn-primary mt-3" name="submit" value="save"
                    id="myButton" style="border-radius: 0.7rem; background-color: #3887BE; border-color: #3887BE;">
                    Create Order</button>
                    
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.add-notes').click(function(e) {
        e.preventDefault();
        var $this = $(this); // The current "Add notes" link that was clicked

        // Generate a unique identifier for the notes input related to the specific item
        // For instance, if the related input field has an id of "menu_mineral_water_qty",
        // the notes field could be "notes_menu_mineral_water_qty".
        var relatedInputId = $this.prevAll('input[type="number"]').attr('id');
        var notesInputId = 'notes_' + relatedInputId;
        var notesInputName = 'notes_' + relatedInputId;

        // Check if the notes input already exists within the same card to avoid adding multiple inputs
        if ($this.siblings('#' + notesInputId).length === 0) {
            // Insert a textarea just before the "Add notes" link within the same card
            // Use the generated names and ids for the textarea
            $this.before(
                '<textarea class="form-control mt-2 notes_input" id="' + notesInputId + '" name="' +
                notesInputName +
                '" placeholder="Enter notes" style="background-color: #FFFFFF; border-radius: 0.7rem;"></textarea>'
            );
        }

        // Optionally, hide the "Add notes" link after adding the textarea
        $this.hide();
    });
});
</script>