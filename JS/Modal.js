function ModalEditGarcom()
{
    $('#MeuModalEdit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever');
        var recipientcodigo = button.data('whatevercodigo');
        var recipientid = button.data('whateverid');
        var modal = $(this)
        modal.find('#recipient-name').val(recipient);
        modal.find('#Codigo').val(recipientcodigo);
        modal.find('#Id').val(recipientid);
    });
}

function ModalDeleteGarcom()
{
    $('#MeuModalDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipientid = button.data('whateverid');
        var modal = $(this)
        modal.find('#Id').val(recipientid);
    });
}


