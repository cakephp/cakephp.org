$(function () {

    // make code pretty
    window.prettyPrint && prettyPrint()

    $(document).on('click', '.yamm .dropdown-menu', function (e) {
        e.stopPropagation()
    })

})
