const mappings = {
    // button   : #modal
  
    '#createRegion': '#regionModal #modalContent',
    '#createTown': '#regionModal #modalContent',
    '#createJk': '#regionModal #modalContent',
    '#createCategory': '#regionModal #modalContent',
    
    //-this model use in module cash collection and cash collection in supply module
   
 
    
};

for(let i in mappings) {
    const k = mappings[i];

    $(i).on('click', function(e) {
        const value = $(this).prop('value');
        const [ modal, modalContent ] = k.split(' ');
        const modalBox = $(modal);
        modalBox.modal('show').find(modalContent).html('<h2>Loading...</h2>');
        $.get(value.toString(), {}, (res) => {
            modalBox.find(modalContent).html(res);
        });
    })
}



$(document).ready(function() {
    // Previous Customer
    $('#previouscustomer').click(function(){
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
    // Other ready commands / code
    $('#createTicket').click(function(){
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
    });
   
    $.fn.modal.Constructor.prototype.enforceFocus = $.noop;

    $('#collectionModel').on('shown.bs.modal', function () {
        $('#cashcollection-type', this).chosen('destroy').chosen();
    });

});

