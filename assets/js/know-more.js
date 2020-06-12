var links = document.querySelectorAll('[data-toggle-id]');
  for (var ix = 0; ix < links.length; ix++) {
    links.item(ix).addEventListener('click', function() {
      document.getElementById(this.dataset.toggleId).classList.toggle('show');
      document.getElementsByClassName(this.parentElement.classList.toggle('clicked'));
      document.getElementsByClassName(this.classList.toggle('rotate'));
    });
}