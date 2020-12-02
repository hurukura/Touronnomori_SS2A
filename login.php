<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>討論の杜 | ログイン</title>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <style>h1{text-align: center;}</style>
</head>
<body>
  <h1>討論の杜へログイン、新規登録</h1>
  <div id="firebaseui-auth-container"></div>

  <script src="https://www.gstatic.com/firebasejs/5.8.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.8.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/ui/3.5.2/firebase-ui-auth__ja.js"></script>
  <script src="./config.js"></script>
  <script>
    //----------------------------------------------
    // Firebase UIの設定
    //----------------------------------------------
    var uiConfig = {
        // ログイン完了時のリダイレクト先
        signInSuccessUrl: 'http://localhost/kaihatsu/done.html',

        // 利用する認証機能
        signInOptions: [
          firebase.auth.EmailAuthProvider.PROVIDER_ID  //メール認証
        ],

        // 利用規約のURL(任意で設定)
        tosUrl: 'http://example.com/kiyaku/',
        // プライバシーポリシーのURL(任意で設定)
        privacyPolicyUrl: 'http://example.com/privacy'
      };

      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      ui.start('#firebaseui-auth-container', uiConfig);
</script>
</body>
</html>