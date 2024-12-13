<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo base_url('assets/'); ?>js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/loader/jquery.loading.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toast/jquery.toast.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/switch/bootstrap-switch-button.min.js"></script>
<script>
    function toast_msg(title, desc, type) {
        $.toast({
            heading: title,
            text: desc,
            icon: type,
            stack: 1,
            hideAfter: 5000,
            position: 'top-right'
        })
    }

    function showload() {

        $.showLoading({
            name: 'circle-turn',
            allowHide: false
        });

    }

    function hideload() {

        $.hideLoading();

    }

    function changeStatus(id, tableName, element) {
        if ($(element).prop('checked')) {
            var status = 1;
        } else {
            var status = 0;
        }
        showload();
        $.ajax({
            url: '<?php echo base_url('Dashboard/updateStatus'); ?>',
            type: "POST",
            data: {
                id: id,
                tableName: tableName,
                status: status
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == true) {
                    hideload();
                    toast_msg('Success', response.message, 'success');

                } else {
                    hideload();
                    toast_msg('Error', response.message, 'error');
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                hideload();
                toast_msg('Error', errorThrown, 'error');
            }
        });
    }

    function changeDisplayOrder(id, tableName, disOrder, oriDisOrder) {
        if (disOrder != oriDisOrder) {
            showload();
            $.ajax({
                url: '<?php echo base_url('Dashboard/updateDisplayOrder'); ?>',
                type: "POST",
                data: {
                    id: id,
                    tableName: tableName,
                    disOrder: disOrder
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {
                        hideload();
                        toast_msg('Success', response.message, 'success');

                    } else {
                        hideload();
                        toast_msg('Error', response.message, 'error');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    hideload();
                    toast_msg('Error', errorThrown, 'error');
                }
            });
        }
    }

    function deleteData(id, tableName) {
        Swal.fire({
            title: 'Are you sure to delete data?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Delete it',
            denyButtonText: 'Cancel',
        }).then((result) => {
            if (result.value) {
                showload();
                $.ajax({
                    url: '<?php echo base_url('Dashboard/deleteData'); ?>',
                    type: "POST",
                    data: {
                        id: id,
                        tableName: tableName
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == true) {
                            hideload();
                            location.reload();

                        } else {
                            hideload();
                            toast_msg('Error', response.message, 'error');
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        hideload();
                        toast_msg('Error', errorThrown, 'error');
                    }
                });
            }
        })
    }
</script>