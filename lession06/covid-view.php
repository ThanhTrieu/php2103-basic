
<?php if(!empty($globalVirus)): ?>
    <div class="row">
        <div class="col-md-4">
            <!-- thong tin nhiem benh -->
            <div class="card">
                <div class="card-header">
                    Nhiem benh
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ca moi nhiem: <?php echo number_format($globalVirus['NewConfirmed']); ?></h5>
                    <h5 class="card-title">Tong ca moi nhiem: <?php echo number_format($globalVirus['TotalConfirmed']); ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- thong tin tu vong -->
            <div class="card">
                <div class="card-header">
                    Tu vong
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ca moi tu vong: <?php echo number_format($globalVirus['NewDeaths']); ?></h5>
                    <h5 class="card-title">Tong ca tu vong: <?php echo number_format($globalVirus['TotalDeaths']); ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- thong tin khoi benh -->
            <div class="card">
                <div class="card-header">
                    Khoi benh
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ca moi chua khoi: <?php echo number_format($globalVirus['NewRecovered']); ?></h5>
                    <h5 class="card-title">Tong ca chua khoi: <?php echo number_format($globalVirus['TotalRecovered']); ?></h5>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>