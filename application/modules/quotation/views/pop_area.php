<script>
    function takeOutUser(elem){
        var id_user = elem.getAttribute('id-user');
        var nama = elem.text;
        $("#id_sales").val(id_user);
        $("#sales").val(nama);
        
        setTimeout(function(){
            
            $("#popUser").modal('hide');
            
        },300);
    }
</script>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="chooseTypeLabel">Sales</h4>
        </div>
        <div class="modal-body">
           
           <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIK</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($data):?>
                            <?php $i=1; foreach($data as $dt):?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $dt->nik;?></td>
                                    <td>
                                        <a href="javascript:void(0)" onClick="return takeOutUser(this)" id-user="<?php echo $dt->id_user;?>" title="Click to select"><?php echo $dt->nama;?></a>
                                    </td>
                                </tr>
                            <?php ++$i; endforeach;?>
                        <?php else: ?>
                            
                            User sales tidak ada
                        <?php endif;?>
                    </tbody>
                </table>
                
           </div>
           
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
