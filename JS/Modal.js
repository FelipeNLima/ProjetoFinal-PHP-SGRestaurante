function ModalEditGarcom()
{
    $('#MeuModalEdit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever');
        var recipientcodigo = button.data('whatevercodigo');
        var modal = $(this)
        modal.find('#recipient-name').val(recipient);
        modal.find('#Codigo').val(recipientcodigo);
    })
}


