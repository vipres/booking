<footer class="footer">
  <div class="container-fluid">
    <nav class="float-left">
      <ul>
        <li>
          <a href="https://www.creative-tim.com">
              {{ __('Creative Tim') }}
          </a>
        </li>
        <li>
          <a href="https://creative-tim.com/presentation">
              {{ __('About Us') }}
          </a>
        </li>
        <li>
          <a href="http://blog.creative-tim.com">
              {{ __('Blog') }}
          </a>
        </li>
        <li>
          <a href="https://www.creative-tim.com/license">
              {{ __('Licenses') }}
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright float-right">
      &copy;
    <span id="year"></span> made with <i class="material-icons">favorite</i> by
      <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> and <a href="https://www.updivision.com" target="_blank">UPDIVISION</a> for a better web.
    </div>
  </div>
</footer>
@push('js')
    <script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
    <script>jQuery.event.special.touchstart = {
        setup: function( _, ns, handle ){
          if ( ns.includes("noPreventDefault") ) {
            this.addEventListener("touchstart", handle, { passive: false });
          } else {
            this.addEventListener("touchstart", handle, { passive: true });
          }
        }
      };</script>
@endpush
