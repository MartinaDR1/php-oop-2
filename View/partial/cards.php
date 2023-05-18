<h1 class="text-center my-3">Computers List</h1>
        <div class="container">
            <div class="row row-cols-3 row-cols-xs-1">

                <?php foreach ($computers as $computer) {?>
                    <div class="card shadow p-3 mb-2">
                        <div class="card-body">
                            <img src="<?= $computer->image ?>" alt="">

                            <h5 class="card-title mt-3"><?=$computer->brand?> - <?=$computer->model?> </h5>
                            <h6 class="card-subtitle mb-2 text-muted "> <?=$computer->getType()?> </h6>
                        
                            <ul class="list-group">
                            
                                <li class="list-group-item">
                                    <?=$computer->getType() === "Desktop" ? "keyboard " : "Battery "?><?=$computer->getType() === "Desktop" ? $computer->keyboard : $computer->battery?> 
                                </li>
                                <li class="list-group-item">
                                    <?=$computer->getType() === "Desktop" ? "monitor" : "TouchPad "?><?=$computer->getType() === "Desktop" ? $computer->monitor : $computer->touchpad?>
                                </li>
                                <li class="list-group-item"><?= $computer->getPortability() ?> </li>
                            </ul>
                        </div>
                    </div>
                <?php }?>
                
            </div>
        </div>