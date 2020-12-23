$('#wizard').bootstrapWizard({
  nextSelector: '.button-next',
  previousSelector: '.button-previous',
  onTabShow: function (tab, navigation, index) {
    var $total = navigation.find('li').length
    var $current = index + 1
    var $percent = ($current / $total) * 100

    $('#rootwizard')
      .find('.bar')
      .css({ width: $percent + '%' })

    if ($current >= $total) {
      $('#wizard').find('.list-inline .next').hide()
      $('#wizard').find('.list-inline .finish').show()
      $('#wizard').find('.list-inline .finish').removeClass('disabled')
    } else {
      $('#wizard').find('.list-inline .next').show()
      $('#wizard').find('.list-inline .finish').hide()
    }
  },
})

$('footer').css('display', 'none')
