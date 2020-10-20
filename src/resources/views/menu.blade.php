
  <nav class="pushmenu pushmenu-left">
    <div class='menu-hamb'>
        <img src="/img/icons-svg/arrow-left-solid.svg">
    </div>
  </nav>

  <script type="text/javascript">
        $(document).ready(function() {
            $menuLeft = $('.pushmenu-left');
            $nav_list = $('.menu-hamb');
            
            $nav_list.click(function() {
                $('.menu-hamb').toggleClass('active');
                $('.pushmenu-push').toggleClass('pushmenu-push-toright');
                $menuLeft.toggleClass('pushmenu-open');
            });
        });
  </script>