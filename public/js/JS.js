$(document).ready(() => {
    increase = (id) => {
        let inputval = parseInt($('#' + id).val())
        inputval += 1
        $('#' + id).val(inputval)
    }
    decrease = (id) => {
        let inputval = parseInt($('#' + id).val())
        inputval -= 1
        if (inputval <= 0) {
            $('#' + id).val(0)
        } else {
            $('#' + id).val(inputval)
        }
    }
    buyproduct = (id) => {
        let inputval = $('#' + id).val()
        $('.' + id).attr('href', `cart/${id}/${inputval}`)
        console.log()
    }
    changeTotalPrice=(id,price)=>{
    quantity=$('#' + id).val()
    total=parseInt(quantity)*parseInt(price)
    $('.total.'+id).empty();
    $('.total.'+id).append(total)
    }
    //Cart Change Total Price
    DecreaseTotal=(id,price)=>{
    decrease(id)
    changeTotalPrice(id,price)
    let inputval = $('#' + id).val()
    $('.' + id).attr('href', `cart/${id}/${inputval}`)
    }

    IncreaseTotal=(id,price)=>{
    increase(id)
    changeTotalPrice(id,price)
    }


})
