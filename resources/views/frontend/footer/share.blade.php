<style>
    .fixed-buttons {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50px;
      display: flex;
      justify-content: space-between;
      background-color: #141D2E;
      padding: 0px;
      z-index: 999;
    }

    .fixed-buttons button {
      width: 90px;
      border-radius: 3px;
      background-color: transparent;
      color: #363636;
      font-size: 10px;
      border: none;
      outline: none;
      margin-top: 8px;
    }
</style>
  
<div class="fixed-buttons">
    <button onclick="window.location.href='/h5/index.php/home'"><img src="/resources/views/frontend/img/home.png" width="25">
<br><a style="color: #888D9A;">Home</a></button>
    <button onclick="window.location.href='/h5/index.php/vip'"><img src="/resources/views/frontend/img/invest.png" width="25">
<br><a style="color: #888D9A;">Investing</a></button>
    <button onclick="window.location.href='/h5/index.php/team'"><img src="/resources/views/frontend/img/share_cur.png" width="25">
<br><a style="color: #15FFDF;">My Team</a></button>
    <button onclick="window.location.href='/h5/index.php/menu'"><img src="/resources/views/frontend/img/me.png" width="25">
<br><a style="color: #888D9A;">Menu</a></button>
</div>